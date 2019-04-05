<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Auth;
use App\User;
use App\product;
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
        $city =[
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
        return view('shipping',compact('city'));
    }
    public function billing(){
        return view('billing');
    }
     public function createShipping(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'telephone'=>'required|unique:order_details,telephone,'.$request->id,
            'email'=>'required|unique:order_details,email,'.$request->id,
            'address'=>'required',
            'city'=>'required',
            'country'=>'required',
            'zip'=>'required',
            'state'=>'required'
        ]);
        $order_detail = new order_detail;
        $order_detail->customer_id = Auth::user()->id;
        $order_detail->first_name = $request->first_name;
        $order_detail->last_name = $request->last_name;
        $order_detail->email = $request->email;
        $order_detail->telephone = $request->telephone;
        $order_detail->address = $request->address;
        $order_detail->city = $request->city;
        $order_detail->state = $request->state;
        $order_detail->zip = $request->zip;
        $order_detail->address_type = $request->address_type;
        $order_detail->country = $request->country;
        $order_detail->save();
        $User_Shipping = order_detail::where('customer_id', Auth::user()->id)->whereNull('address_type')->get();
        if($User_Shipping->count() > 0){
            return redirect('/checkout');
        }else{
            return redirect('/billing');
        }
     }
     public function createBilling(Request $request){
        $order_detail = new order_detail;
        $order_detail->customer_id = Auth::user()->id;
        $order_detail->first_name = $request->first_name;
        $order_detail->last_name = $request->last_name;
        $order_detail->email = $request->email;
        $order_detail->telephone = $request->telephone;
        $order_detail->address = $request->address;
        $order_detail->city = $request->city;
        $order_detail->state = $request->state;
        $order_detail->zip = $request->postal_code;
        $order_detail->country = $request->country;
        $order_detail->save();
        return redirect('/checkout');
       
     }

    public function checkout()
    {

        $User_Shipping = order_detail::where('customer_id', Auth::user()->id)->whereNotNull('address_type')->get();
        if ($User_Shipping->count() > 0) {
            $User_Billing = order_detail::where('customer_id', Auth::user()->id)->whereNull('address_type')->get();
            if ($User_Billing->count() > 0) {
                $shipping = order_detail::where('customer_id', Auth::user()->id)->whereNotNull('address_type')->get();
                $billing = order_detail::where('customer_id', Auth::user()->id)->whereNull('address_type')->get();
                $getCart = Cart::getContent();
                $product_data = product_data::all();

                return view('checkout', compact('getCart', 'product_data', 'shipping', 'billing'));
                //return response()->json($User_Shipping); 
            } else {
                return redirect('/billing');
            }
        } else {
            return redirect('/shipping');
        }
    }

}
