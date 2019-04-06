<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Auth;
use App\User;
use App\product;
use App\shipping;
use App\billing;
use Cart;
use Session;
use App\transport;
use App\product_attribute;
class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        return view('customer.dashboard');
    }
    public function shipping(){
        $citys =[
            'Chennai',
            'Coimbatore',
            'Madurai',
            'Tiruchirappalli',
            'Salem',
            'Tiruppur',
            'Erode',
            'Tirunelveli',
            'Vellore',
            'Thoothukkudi',
            'Dindigul',
            'Thanjavur',
            'Karur',
            'Sivakasi',
            'Ranipet',
            'Udhagamandalam',
            'Hosur',
            'Nagercoil',
            'Kanchipuram',
            'Namakkal',
            'Sivaganga',
            'Neyveli',
            'Cuddalore',
            'Kumbakonam',
            'Tiruvannamalai',
            'Pollachi',
            'Virudunagar',
            'Pudukottai',
            'Nagapattinam'
        ];
        return view('shipping',compact('citys'));
    }
    public function billing(){
        $citys =[
            'Chennai',
            'Coimbatore',
            'Madurai',
            'Tiruchirappalli',
            'Salem',
            'Tiruppur',
            'Erode',
            'Tirunelveli',
            'Vellore',
            'Thoothukkudi',
            'Dindigul',
            'Thanjavur',
            'Karur',
            'Sivakasi',
            'Ranipet',
            'Udhagamandalam',
            'Hosur',
            'Nagercoil',
            'Kanchipuram',
            'Namakkal',
            'Sivaganga',
            'Neyveli',
            'Cuddalore',
            'Kumbakonam',
            'Tiruvannamalai',
            'Pollachi',
            'Virudunagar',
            'Pudukottai',
            'Nagapattinam'
        ];
        return view('billing',compact('citys'));
    }
     public function createShipping(Request $request){
        $request->validate([
            'first_name'=>'required',
            'telephone'=>'required',
            'address'=>'required',
            'zip'=>'required',
        ]);
        $order_detail = new shipping;
        $order_detail->customer_id = Auth::user()->id;
        $order_detail->first_name = $request->first_name;
        $order_detail->last_name = $request->last_name;
        $order_detail->email = $request->email;
        $order_detail->telephone = $request->telephone;
        $order_detail->address = $request->address;
        $order_detail->city = $request->city;
        $order_detail->state = $request->state;
        $order_detail->zip = $request->zip;
        $order_detail->country = $request->country;
       $order_detail->save();
        $User_billing = billing::where('customer_id', Auth::user()->id)->get();
        if($User_billing->count() > 0){
            return redirect('/checkout');
        }else{
            return redirect('/billing');
        }
     }
     public function createBilling(Request $request){
        $order_detail = new billing;
        $order_detail->customer_id = Auth::user()->id;
        $order_detail->first_name = $request->first_name;
        $order_detail->last_name = $request->last_name;
        $order_detail->email = $request->email;
        $order_detail->telephone = $request->telephone;
        $order_detail->address = $request->address;
        $order_detail->city = $request->city;
        $order_detail->state = $request->state;
        $order_detail->zip = $request->zip;
        $order_detail->country = $request->country;
        $order_detail->save();
        return redirect('/checkout');
     }

    public function checkout()
    {
            $shipping = shipping::where('customer_id', Auth::user()->id)->get();
            if ($shipping->count() > 0) {
                $billing = billing::where('customer_id', Auth::user()->id)->get();
                $getCart = Cart::getContent();
                foreach($getCart as $item){
                    $product_id[] =$item->id;
                }
                $products = product::whereIn('id',$product_id)->get();
                $result = '<tr>
                ';
                foreach($products as $row){
                    $result .='<td colspan="2" data-title="Product Name"><a href="#" class="product_title">'.$row->product_name.'</a>';
                    $product_attribute = product_attribute::where('product_id',$row->id)->get();
                    $cart_qty = Cart::get($row->id);
                    if(count($product_attribute) > 0){
                        $result .='	<ul class="sc_product_info">
                        
                        </ul>';
                    }
                    $result .='<td data-title="Price" class="subtotal">₹ '.$row->sales_price.'</td>

                    <td data-title="Quantity">'.$cart_qty->quantity.'</td>';
                    $item_total = $cart_qty->quantity * $row->sales_price;
                    if($row->tax_type == "in"){
                        $tax = round($item_total*$row->tax/(100+$row->tax),2);
                        //$subTotal =  $item_total - $tax;
                        $result .='<td data-title="TAX">Inclusive Tax <br>₹ '.$tax.'('.$row->tax.' %)</td>';
                        $result .='<td data-title="Total" class="total">₹ '.$item_total.'</td>';
                    }else{
                        $tax=$item_total * $row->tax/100;
                        $total=$item_total+$tax;
                        $result .='<td data-title="TAX"> Exclusive Tax <br>₹ '.$tax.'('.$row->tax.' %)</td>';
                        $result .='<td data-title="Total" class="total">₹ '.$total.'</td>';
                    }
                   

                    

                }
                // $product_data = product::all();
                // if(Session::has('transport')){
                //     $output = '<ul class="simple_vertical_list row">';
                //     $transport_exits = Session::get('transport');
                //     foreach($transport_exits[0] as $row){
                //         $transport = transport::find($row['selected_data']['transport_id']);
                //         $output .='<div class="col-sm-3 transport_style">
                //         <li>Vehicle Name : <b>₹'.$transport->vehicle_name.'</b></li>
                //         <li>Km Price : ₹'.$row['selected_data']['price'].'</li>
                //         <li>Distance : '.$row['selected_data']['distance'].' Km</li>
                //         <li>Other : ₹'.$row['selected_data']['other'].'</li>
                //         <li>Total Price :<b>₹ '.$row['selected_data']['total'].'</b></li>
                //         ';
                //         $product = product::whereIn('id',$row['selected_data']['cart_item'])->get();
                //         $output .='<br>';
                //         $output .='<h5>Product List</h5>';
                    
                //         $x =1;
                //         foreach($product as $data){
                //             $output .='<li>'.$x.' '.$data->product_name.'</li>';
                //             $x++;
                //         }
                //         $output .='</div>';
                //     }
                //     $output .='</ul>';
                // }else{
				// $output = '<h5 class="button_grey">Own Transport</h5>';
                // }
               // return view('checkout', compact('getCart', 'product_data', 'shipping', 'billing','output'));
                //return response()->json($products); 
                print $result;
            } 
     else {
            return redirect('/shipping');
        }
    }

    public function transport(){
        $transport = transport::all();
        //return response()->json($transport);
        //return response()->json($transport_exits); 
        // $transport_exits = Session::get('transport');
        if(Session::has('transport')){
            return redirect('/checkout');
        }else{
            return view('transport',compact('transport'));

        }
        }

    public function editTransport(){
        $transport = transport::all();
            return view('transport',compact('transport'));
        }

        public function ownTransport(){
            Session::forget('transport');
            return response()->json(Session::get('transport'));
        }

}
