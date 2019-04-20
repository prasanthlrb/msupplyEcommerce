<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\order;
use App\order_transport;
use App\company;
use Yajra\DataTables\Facades\DataTables;
class customerController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }
   public function customer(){
       return view('admin.customer');
   }

   public function getCustomer($id){
    if($id != 3){
        if($id == "user"){
            $customer = User::where('user_type','user')->orderBy('id','desc')->get();
        }else{
            $customer = DB::table('users as u')
            ->where('u.user_type','=','company')
            ->join('companies as c', 'c.user_id', '=', 'u.id')
            ->select('u.name','u.email','u.phone','u.user_type','u.id','c.company')
            ->orderBy('u.id','desc')->get();
        }
      
        
        //order_transport::where('status',$filter)->orderBy('id','desc')->get();
    }
    else{
        $customer = DB::table('users as u')
        ->leftJoin('companies as c', 'c.user_id', '=', 'u.id')
        ->select('u.name','u.email','u.phone','u.user_type','u.id','c.company')
        ->orderBy('u.id','desc')->get();
    }
    return Datatables::of($customer)
    ->addColumn('customer', function($customer){
        if($customer->user_type == "user"){
            $row = $customer->name;
        }else{
            $row = $customer->company.' - '.$customer->name;
        }
        return '<td>
       '.$row.'
        </td>';
        }) 
    ->addColumn('user_type', function($customer){
        if($customer->user_type == "user"){
            $row = "Individual";
        }else{
            $row = "Company";
        }
        return '<td>
       '.$row.'
        </td>';
        }) 
        ->addColumn('action', function($customer){
            return ' <span class="dropdown">
            <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
            <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
              <a href="/admin/profile/'.$customer->id.'" target="_blank"  class="dropdown-item"><i class="la la-eye"></i>Profile</a>
              <a href="/admin/customer-order/'.$customer->id.'" target="_blank" class="dropdown-item"><i class="icon-handbag"></i>Order</a>
              <a href="/admin/customer-transport/'.$customer->id.'" target="_blank" class="dropdown-item"><i class="la la-truck"></i>Transport</a>
              <a href="javascript:void(null)" onclick="Delete('.$customer->id.')" class="dropdown-item"><i class="la la-trash"></i> Delete</a>
            </span>';
        })
        ->addIndexColumn()
    ->rawColumns(['action','customer','user_type'])
    ->make(true);
   }

   public function profile($id){
       $user = User::find($id);
       $output ='<div class="form-group row">
       <input type="hidden" name="id" value="'.$user->id.'">
       <label class="col-md-3 label-control" for="projectinput1">First Name</label>
       <div class="col-md-9">
         <input type="text" id="projectinput1" class="form-control" placeholder="First Name"
         name="name" value="'.$user->name.'">
       </div>
     </div>
    
     <div class="form-group row">
       <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
       <div class="col-md-9">
         <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email" value="'.$user->email.'">
       </div>
     </div>
     <div class="form-group row">
       <label class="col-md-3 label-control" for="projectinput4">Contact Number</label>
       <div class="col-md-9">
         <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone" value="'.$user->phone.'">
       </div>
     </div>
    ';
       if($user->user_type == "company"){
           $company = company::where('user_id',$user->id)->first();
           $output .='
           
           <h4 class="form-section"><i class="ft-clipboard"></i> Company Details</h4>
           <div class="form-group row">
             <label class="col-md-3 label-control" for="projectinput5">Company</label>
             <div class="col-md-9">
               <input type="text" id="projectinput5" class="form-control" placeholder="Company Name"
               name="company" value="'.$company->company.'">
             </div>
           </div>
           <div class="form-group row">
             <label class="col-md-3 label-control" for="projectinput5">GST</label>
             <div class="col-md-9">
               <input type="text" id="projectinput5" class="form-control" placeholder="Company GST No"
               name="gst" value="'.$company->gst.'">
             </div>
           </div>
           <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
             <a href="/gst_doc/'.$company->gst_doc.'" itemprop="contentUrl" data-size="480x360">
               <img class="img-thumbnail img-fluid" src="/gst_doc/'.$company->gst_doc.'"
               itemprop="thumbnail" alt="Image description" />
             </a>
           </figure>';
       }
       return view('admin.profile',compact('output'));
   }
   public function customerOrder($id){
       $order = DB::table('orders as o')
       ->where('o.user_id','=',$id)
       ->join('order_items as i', 'o.id', '=', 'i.order_id')
       ->join('users as u', 'o.user_id', '=', 'u.id')
       ->select('o.id','o.created_at','o.order_status','o.payment_type','o.total_amount','o.transport_type','u.name','u.email','u.phone','u.user_type',
       'i.product_name','i.qty','i.order_id')
       ->orderBy('o.id','desc')->get();
       return view('admin.customerOrder',compact('order'));
   }
   public function customerTransport($id){
 $transport = DB::table('order_transports as t')
    ->where('t.user_id',$id)
    ->join('users as u', 't.user_id', '=', 'u.id')
    ->select('t.*','u.name','u.email','u.phone','u.user_type')
    ->orderBy('t.id','desc')->get();
       return view('admin.customerTransport',compact('transport'));
   }
}
