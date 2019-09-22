<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\order_item;
use App\order_attribute;
use App\shipping;
use App\billing;
use App\User;
use App\product;
use App\order_transport;
use Yajra\DataTables\Facades\DataTables;
use DB;
use Auth;
use App\role;
use App\order_log;
use App\paintOrderDetails;
class orderController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    public function order(){
        // $order = order::all();
        // $order_transport = order_transport::all();
        // return response()->json($order);
        $role = role::find(Auth::guard('admin')->user()->role_id);
        return view('admin.order',compact('role'));
    }

    public function allOrder($filter){
        if($filter != 6) {
            $order = DB::table('orders as o')
            ->where('o.order_status',$filter)
            ->join('users as u', 'o.user_id', '=', 'u.id')
            ->join('order_items as i', 'o.id', '=', 'i.order_id')
            ->select('o.id','o.created_at','o.order_status','o.payment_type','o.total_amount','o.transport_type','u.name','u.email','u.phone','u.user_type',
            'i.product_name','i.qty','i.order_id')
            ->orderBy('o.id','desc')->get();

    }else{
        $order = DB::table('orders as o')
        ->join('users as u', 'o.user_id', '=', 'u.id')
        ->join('order_items as i', 'o.id', '=', 'i.order_id')
        ->select('o.id','o.created_at','o.order_status','o.payment_type','o.total_amount','o.transport_type','u.name','u.email','u.phone','u.user_type',
        'i.product_name','i.qty','i.order_id','i.unit_type')
        ->orderBy('o.id','desc')->get();
    }
        return Datatables::of($order)
        ->addColumn('checkbox', function($order){
            return '<td><input type="checkbox" name="order_checkbox[]" class="order_checkbox" value="'.$order->order_id.'"></td>';})
   ->addColumn('order_id', function($order){
    return '<a href="/admin/order-item/'.$order->order_id.'" >#'.$order->order_id.'</a>';
   })
   ->addColumn('order_details', function($order){
       if($order->transport_type == "1"){
           $output = "Transport : KAS Earth Mover";
       }else{
        $output = "Transport : Own Transport";
       }
    return '<td>
    <p>'.$output.'</p>
    <p>order Date : '.$order->created_at.'</p>
    <p>Item Name : '.$order->product_name.'</p>
    <p>quantity : '.$order->qty.'</p>
    <p>Unit Type : '.$order->unit_type.'</p>
    <p>Total : '.$order->total_amount.'</p>
    </td>';
   })
   ->addColumn('payment_type', function($order){
    return '<td>
    '.$order->payment_type == "1" ? "Cash on Delivery" : "Online Payment".'
    </td>';
   })
   ->addColumn('order_status', function($order){

    if($order->order_status == 0){
        $status ='<b>Pending</b>';
    }
    else if($order->order_status == 1){
        $status ='<b>Processing</b>';
    }
    else if($order->order_status == 2){
        $status ='<b>Shipping</b>';
    }
    else if($order->order_status == 3){
        $status ='<b>Delivered</b>';
    }
    else if($order->order_status == 4){
        $status ='<b>on-hold</b>';
    }

    else{
        $status ='<b>failed</b>';
    }
    return '<td>
    '.$status.'
    </td>';

    })
//    ->addColumn('transport_type', function($order){
//     return '<td>
//     '.$order->transport_type == "1" ? "KAS Earth Mover" : "Own Transport".'
//     </td>';
//     })
   ->addColumn('customer_details', function($order){
    return '<td>
   <p>'.$order->name.'</p>
    <p>'.$order->phone.'</p>
    </td>';
    })

         ->rawColumns(['order_id','order_details','payment_type','order_status','customer_details','checkbox'])
           ->make(true);

    }

    public function orderAction(Request $request){
        if($request->status != 6){
            $order = order::whereIn('id',$request->id)->get();
            foreach($order as $row){
               $row->order_status = $request->status;
               $row->save();
               if($request->status == 0){
                $status ='<b>Pending</b>';
            }
            else if($request->status == 1){
                $status ='<b>Processing</b>';
            }
            else if($request->status == 2){
                $status ='<b>Shipping</b>';
            }
            else if($request->status == 3){
                $status ='<b>Delivered</b>';
            }
            else if($request->status == 4){
                $status ='<b>on-hold</b>';
            }

            else{
                $status ='<b>failed</b>';
            }
               $order_log = new order_log;
               $order_log->order_id  = $row->id;
               $order_log->change_status = $status;
               $order_log->employee_name = Auth::guard('admin')->user()->emp_name;
               $order_log->save();
            }
        }
        return response()->json(["Successfully Update"],200);
    }
    public function orderItemAction(Request $request){
        $orderChange = order::find($request->id);
        $orderChange->order_status = $request->status;
        $orderChange->save();
        if($request->status == 0){
            $status ='<b>Pending</b>';
        }
        else if($request->status == 1){
            $status ='<b>Processing</b>';
        }
        else if($request->status == 2){
            $status ='<b>Shipping</b>';
        }
        else if($request->status == 3){
            $status ='<b>Delivered</b>';
        }
        else if($request->status == 4){
            $status ='<b>on-hold</b>';
        }

        else{
            $status ='<b>failed</b>';
        }
           $order_log = new order_log;
           $order_log->order_id  = $orderChange->id;
           $order_log->change_status = $status;
           $order_log->employee_name = Auth::guard('admin')->user()->emp_name;
           $order_log->save();
        return response()->json(["Successfully Update"],200);
    }

    public function orderItem($id){
        $order = order::find($id);
        $items = order_item::where('order_id',$order->id)->get();
        $shipping = shipping::find($order->shipping);
        $billing = billing::find($order->billing);
        $user = User::find($order->user_id);
        $paint_details = paintOrderDetails::where('order_id',$order->id)->get();
        if($paint_details->count()>0){
            $paint_title = '<th class="text-right">Color Code</th><th class="text-right">Litreage</th>';
            $paint_body = '<td class="text-right">'.$paint_details[0]->color_id.'</td><td class="text-right">'.$paint_details[0]->lit.'</td>';
        }else{
            $paint_title = '';
            $paint_body = '';
        }
        $output ='
              <thead>
                          <tr>
                            <th>#</th>
                            <th>Item & Attributes</th>
                            <th class="text-right">Rate</th>
                            <th class="text-right">quantity</th>
                            '.$paint_title.'
                            <th class="text-right">Amount</th>
                          </tr>
                        </thead>
                        <tbody>
        <tr>
        <th scope="row">1</th>';

        $output .='
        <td>';
        foreach($items as $item){
            $product = product::find($item->product_id);
            $output .=' <p>'.$item->product_name.'</p>';
          $attr = order_attribute::where('order_item_id',$item->id)->get();
           foreach($attr as $arr){
            $output .=' <p>'.$arr->attr_name.' : '.$arr->terms.'</p>';
           }
           $output .='
           <td class="text-right">₹ '.$item->sales_price.'</td>
           <td class="text-right">'.$item->qty.'</td>
           '.$paint_body.'
           <td class="text-right">₹ '.$item->sales_price * $item->qty.'</td>
         ';
          $subTotal = $item->total_price - $item->tax;

         $result ='<tr>
         <td>Sub Total</td>
         <td class="text-right">₹ '.$subTotal.'</td>
       </tr>
       <tr>
         <td>TAX ('.$product->tax.'%) - '.$item->tax_type.'</td>
         <td class="text-right">₹ '.$item->tax.'</td>
       </tr>
       <tr>
         <td class="text-bold-800">Total</td>
         <td class="text-bold-800 text-right"> ₹ '.$item->total_price.'</td>
       </tr>';


        }
        $output .='
      </tr>';
        return view('admin.orderItem',compact('order','shipping','billing','user','output','result'));
    }

    public function orderTransport(){
        $role = role::find(Auth::guard('admin')->user()->role_id);
        return view('admin.orderTransport',compact('role'));
    }

    public function orderTransportGet($filter){
        if($filter != 3){
            $transport = DB::table('order_transports as t')
            ->where('t.status',$filter)
            ->join('users as u', 't.user_id', '=', 'u.id')
            ->select('t.*','u.name','u.email','u.phone','u.user_type')
            ->orderBy('t.id','desc')->get();

            //order_transport::where('status',$filter)->orderBy('id','desc')->get();
        }
        else{
            $transport = DB::table('order_transports as t')
            ->join('users as u', 't.user_id', '=', 'u.id')
            ->select('t.*','u.name','u.email','u.phone','u.user_type')
            ->orderBy('t.id','desc')->get();
        }
        return Datatables::of($transport)
        ->addColumn('checkbox', function($transport){
            return '<td><input type="checkbox" name="order_checkbox[]" class="order_checkbox" value="'.$transport->id.'"></td>';})
            ->addColumn('order_id', function($transport){
                return '<a href="/admin/order-transport-details/'.$transport->id.'" >#'.$transport->id.'</a>';
               })
               ->addColumn('distance', function($transport){
                return '<td>
                '.$transport->distance.' Km
                </td>';
               })
               ->addColumn('total', function($transport){
                return '<td>
                ₹ '.$transport->total.'
                </td>';
               })
               ->addColumn('customer_details', function($transport){
                return '<td>
               <p>'.$transport->name.'</p>
                <p>'.$transport->phone.'</p>
                </td>';
                })
                ->addColumn('status', function($transport){
                    if($transport->status == 0){
                        $status ='<b>Booked</b>';
                    }
                    else if($transport->status == 1){
                        $status ='<b>Delivery</b>';
                    }
                    else if($transport->status == 2){
                        $status ='<b>Cancel</b>';
                    }

                    else{
                        $status ='<b>failed</b>';
                    }
                    return '<td>
                    '.$status.'
                    </td>';
                   })
            ->rawColumns(['checkbox','order_id','distance','total','customer_details','status'])
        ->make(true);
    }
    public function orderTransportAction(Request $request){
        // $orderChange = order_transport::find($request->id);
        // $orderChange->status = $request->status;
        // $orderChange->save();
        if($request->status != 6){
            $orderChange = order_transport::whereIn('id',$request->id)->get();
            foreach($orderChange as $row){
               $row->status = $request->status;
               $row->save();
            }
        }
        return response()->json(["Successfully Update"],200);
    }

    public function orderTransportDetails($id){
        $order = order_transport::find($id);
        $user = User::find($order->user_id);
        $shipping = shipping::find($order->shipping);
        $product = product::whereIn('id',explode(',', $order->order_item))->get();
       // return response()->json($product);
        return view('admin.orderTransportDetails',compact('order','user','shipping'));
    }
    public function orderTransportItemAction(Request $request){
        $orderChange = order_transport::find($request->id);
        $orderChange->status = $request->status;
        $orderChange->save();
        return response()->json(["Successfully Update"],200);
    }
    public function orderMail($id){
        //$all = $request->all();
        // Mail::send('mail',compact('all'),function($message) use($all){
        //     $message->to('prasanthbca7@gmail.com','To LRB')->subject($all['cf_order_number']);
        //     $message->from('prasanthats@gmail.com','To Prasanth');
        // });
        //  $orderData = $request->all();
        // Mail::to($contactData['cf_email'])->send(new OrderMailable($orderData));
        //return 'Email was sent';
        return response()->json(['message'=>'Successfully Send'],200);
        //return response()->json($contactData['cf_email']);
    }
}
