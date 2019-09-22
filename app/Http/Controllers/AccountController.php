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
use App\attribute;
use App\order;
use App\order_item;
use App\order_transport;
use App\order_attribute;
use App\wishlist;
use App\company;
use App\review;
use App\rating;
use App\Mail\OrderMailable;
use Illuminate\Support\Facades\Mail;
use PDF;
use App\contactinfo;
use App\paintOrderDetails;
class accountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        return view('customer.dashboard');
    }
    public function shipping()
    {
        $citys = [
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
        return view('shipping', compact('citys'));
    }
    public function billing()
    {
        $citys = [
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
        return view('billing', compact('citys'));
    }
    public function accShipping()
    {
        $citys = [
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
        return view('customer.shipping', compact('citys'));
    }
    public function accBilling()
    {
        $citys = [
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
        return view('customer.billing', compact('citys'));
    }
    public function createShipping(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'zip' => 'required',
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
        if ($User_billing->count() > 0) {
            return redirect('/checkout');
        } else {
            return redirect('/billing');
        }
    }
    public function createBilling(Request $request)
    {
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
    public function accCreateShipping(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'zip' => 'required',
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

        return redirect('/account/address');
    }
    public function accCreateBilling(Request $request)
    {
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
        return redirect('/account/address');
    }

    public function checkout()
    {
        $shipping = shipping::where('customer_id', Auth::user()->id)->get();
        if ($shipping->count() > 0) {
            $billing = billing::where('customer_id', Auth::user()->id)->get();
            $getCart = Cart::getContent();
                        $result = '';
                           $exTax = 0;
            $totalPrice = 0;
            $transport_Price = 0;
            foreach ($getCart as $item) {
                //$product_id[] = $item->id;
            
            //$row = product::find($item->id);
            if(isset($item['attributes']['color'])){
            $row = product::find($item['attributes']->product_id);
           }else{
               $row = product::find($item->id);
           }
           

         
        //    // foreach ($products as $row) {
                $result .= '<tr>';
                $result .= '<td colspan="2" data-title="Product Name"><a href="#" class="product_title">' . $item->name . '</a>';
                $product_attribute = product_attribute::where('product_id', $row->id)->get();
            //    // $cart_qty = Cart::get($row->id);

                $result .= '	<ul class="sc_product_info">';
               if(!isset($item['attributes']['color'])){
        if(!isset($item['attributes']['steel'])){
        if(!isset($item['attributes']['tiles'])){
        if(count($item['attributes'])>0){
            foreach($item['attributes'] as $key=>$value) {
                foreach($value as $field => $row) {
                    $result .='<li>'.$field.' : '.$row.'</li>';
                }
            }
           // $result .="I'm Not Paint Steel";
          }
          }
          }
          }
          if(isset($item['attributes']['steel'])){
              $result .='<li>Unit Type : '.$item['attributes']['unit_name'].'</li>';
          }
           if(isset($item['attributes']['color'])){
             $result .=' <li>Color Code : '.$item['attributes']['color_id'].'</li>
                    <li>Litreage : '.$item['attributes']['lit'].'</li>';
           }
                $result .= '</ul>';

                $result .= '<td data-title="Price" class="subtotal">₹ ' . $item->price . '</td>

                    <td data-title="Quantity" style="text-align:center">' . $item->quantity . '</td>';
                $item_total = $item->quantity * $item->price;
                if ($row->tax_type == "in") {
                    $tax = round($item_total * $row->tax / (100 + $row->tax), 2);
                    //$subTotal =  $item_total - $tax;
                    $result .= '<td data-title="TAX">Inclusive Tax <br>₹ ' . $tax . '(' . $row->tax . ' %)</td>';
                    $result .= '<td data-title="Total" class="total" style="text-align:center">₹ ' . $item_total . '</td>';
                    $totalPrice += $item_total;
                } else {
                    $tax = $item_total * $row->tax / 100;
                    $total = $item_total + $tax;
                    $result .= '<td data-title="TAX"> Exclusive Tax <br>₹ ' . $tax . '(' . $row->tax . ' %)</td>';
                    $result .= '<td data-title="Total" class="total" style="text-align:center">₹ ' . $total . '</td>';
                    $exTax += $tax;
                    $totalPrice += $total;
                }


                $result .= '</tr>';
           // }
          // $resultData[]=$result;
        }
        // return response()->json($totalPrice);
            $product_data = product::all();
            if (Session::has('transport')) {
                $output = '<ul class="simple_vertical_list row">';
                $transport_exits = Session::get('transport');
                foreach ($transport_exits[0] as $row) {
                    $transport = transport::find($row['selected_data']['transport_id']);
                    $output .= '<div class="col-sm-3 transport_style">
                        <div class="row">
                        <li><div class="col-sm-6">Vehicle Name </div><div class="col-sm-6">: ' . $transport->vehicle_name . '</div></li>
                        <li><div class="col-sm-6">Km Price </div><div class="col-sm-6">: ₹' . $row['selected_data']['price'] . '</div></li>
                        <li><div class="col-sm-6">Distance </div><div class="col-sm-6">: ' . $row['selected_data']['distance'] . ' Km</div></li>
                        <li><div class="col-sm-6">Other </div><div class="col-sm-6">: ₹' . $row['selected_data']['other'] . '</div></li>
                        <li><div class="col-sm-6">Total Price </div><div class="col-sm-6">: ₹ ' . $row['selected_data']['total'] . '</div></li>
                        </div>
                        ';
                    $transport_Price += $row['selected_data']['total'];
                    $product = product::whereIn('id', $row['selected_data']['cart_item'])->get();
                    $output .= '<br>';
                    $output .= '<h5>Product List</h5>';

                    $x = 1;
                    foreach ($product as $data) {
                        $output .= '<li>' . $x . ' ' . $data->product_name . '</li>';
                        $x++;
                    }
                    $output .= '</div>';
                }
                $output .= '</ul>';
            } else {
                $output = '<h5 class="button_grey">Own Transport</h5>';
            }
            return view('checkout', compact('getCart', 'product_data', 'shipping', 'billing', 'output', 'result', 'totalPrice', 'transport_Price'));
            //return response()->json($result);
            //print $result;
        } else {
            return redirect('/shipping');
        }
    }

    public function transport()
    {
        $transport = transport::all();
        //return response()->json($transport);
        //return response()->json($transport_exits);
        // $transport_exits = Session::get('transport');
        if (Session::has('transport')) {
            return redirect('/checkout');
        } else {
            return view('transport', compact('transport'));
        }
    }

    public function editTransport()
    {
        $transport = transport::all();
        return view('transport', compact('transport'));
    }

    public function ownTransport()
    {
        Session::forget('transport');
        return response()->json(Session::get('transport'));
    }

    //order to be placed
    public function orderPlaced($id, $ship, $bill)
    {
        $payTotal =0;
        $orderIDdetails=array();
        $getCart = Cart::getContent();
        foreach ($getCart as $item) {
        //     $product_id[] = $item->id;
        // }
        //$products = product::find($product_id);
       // foreach ($products as $row) {
              if(isset($item['attributes']['color'])){
            $row = product::find($item['attributes']->product_id);
           }else{
               $row = product::find($item->id);
           }
            $order = new order; //order create
            $order_item = new order_item; //order item create
            //$cart_qty = Cart::get($row->id);
            $item_total = $item->quantity * $item->price;

            if ($row->tax_type == "in") {
                $tax = round($item_total * $row->tax / (100 + $row->tax), 2);
                $order_item->tax_type = "inclusive";
                $order_item->tax = $tax;
                $order_item->tax_percent = $row->tax;
                $order_item->total_price = $item_total;
                $order->total_amount = $item_total;
                $payTotal+=$item_total;
            } else {
                $tax = $item_total * $row->tax / 100;
                $total = $item_total + $tax;
                $order_item->tax_type = "exclusive";
                $order_item->tax = $tax;
                $order_item->tax_percent = $row->tax;
                $order_item->total_price = $total;
                $order->total_amount = $total;
                $payTotal+=$total;
            }

            if (Session::has('transport')) {
                $transport_exits = Session::get('transport');
                foreach ($transport_exits[0] as $trans) {
                    if (in_array($row->id, $trans['selected_data']['cart_item'])) {
                        $transport_type = 1;
                        $order->transport_id = $trans['selected_data']['transport_id'];
                        break;
                    } else {
                        $transport_type = 2;
                    }
                }
            } else {
                $transport_type = 2;
            }

            //order store
            $order->user_id = Auth::user()->id;
            $order->billing = $bill;
            $order->shipping = $ship;
            $order->payment_type = $id;
            $order->transport_type = $transport_type;
            $order->save();
            $orderIDdetails[] += $order->id;
            //order item store
            $order_item->product_name = $row->product_name;
            $order_item->sales_price = $item->price;
            $order_item->product_id = $row->id;
            $order_item->order_id = $order->id;
            $order_item->qty = $item->quantity;
             if(isset($item['attributes']['steel'])){
                $order_item->unit_type = $item['attributes']['unit_name'];
             }
            $order_item->user_id = Auth::user()->id;
            $order_item->save();
            //product Attribute
            $product_attribute = product_attribute::where('product_id', $row->id)->get();
            if (count($product_attribute) > 0) {
                foreach ($product_attribute as $attr) {
                    $attr_name = attribute::find($attr->attribute);
                    $order_attribute = new order_attribute;
                    $order_attribute->attr_name = $attr_name->name;
                    $order_attribute->terms = $attr->term;
                    $order_attribute->order_item_id = $order_item->id;
                    $order_attribute->save();
                }
            }
            if(isset($item['attributes']['color'])){
                $paint_order = new paintOrderDetails;
                $paint_order->order_id = $order->id;
                $paint_order->order_item_id = $order_item->id;
                $paint_order->price = $item->price;
                $paint_order->lit = $item['attributes']['lit'];
                $paint_order->color_id =$item['attributes']['color_id'];
                $paint_order->save();
            }
        }
        if (Session::has('transport')) {
            $transport_exits = Session::get('transport');
            foreach ($transport_exits[0] as $row) {
                $transport = transport::find($row['selected_data']['transport_id']);
                $order_transport = new order_transport;
                $order_transport->vehicle_name = $transport->vehicle_name;
                $order_transport->user_id = Auth::user()->id;
                $order_transport->other = $transport->other;
                $order_transport->price = $transport->price;
                $order_transport->distance = $row['selected_data']['distance'];
                $order_transport->lat = $row['selected_data']['lat'];
                $order_transport->lng = $row['selected_data']['lng'];
                $order_transport->transport_id = $transport->id;
                $order_transport->order_item = collect($trans['selected_data']['cart_item'])->implode(',');
                $order_transport->total = ($row['selected_data']['distance'] * $transport->price) + $transport->other;
                $order_transport->shipping = $ship;
                $order_transport->payment_type = $id;
                $order_transport->save();
            }
        }
        Cart::clear();
        $api = new \Instamojo\Instamojo(
            config('services.instamojo.api_key'),
            config('services.instamojo.auth_token'),
            config('services.instamojo.url')
        );

    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => "Online SHOPING",
            "amount" => $payTotal,
            "buyer_name" => Auth::user()->name,
            "send_email" => true,
            "email" => Auth::user()->email,
            "phone" => Auth::user()->phone,
            "redirect_url" => "https://msupply.net/account/orders"
            ));

            header('Location: ' . $response['longurl']);
            exit();
    }catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
        //return redirect('account/dashboard');
    }

    public function orders(){
        // $orders =DB::table('orders as o')
        // ->join('shippings as s','o.shipping','=','s.id')
        // ->select('o.id','o.created_at','o.order_status','o.total_amount','s.first_name','s.last_name','s.email','s.telephone','s.address','s.zip')
        // ->orderBy('o.id','desc')->paginate(1);
         $orders = DB::table('orders as o')
            ->where('o.user_id', Auth::user()->id)
            ->join('shippings as s', 'o.shipping', '=', 's.id')
            ->select('o.*','s.first_name','s.last_name','s.email','s.address','s.city','s.state','s.zip','s.country','s.telephone')
            ->orderBy('o.id', 'desc')
            ->paginate(3);
        //return response()->json($orders);
        return view('customer/orders', compact('orders'));
    }

    //WishList Screening
    public function wishlist()
    {
        $id = Auth::user()->id;
        $wish = DB::table('wishlists')
            ->where('user', '=', $id)
            ->get();
        $arraydata = array();
        foreach ($wish as $wish1) {
            $arraydata[] = $wish1->product_id;
        }
        $product = product::whereIn('id', $arraydata)
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        //return response($product);
        return view('customer.wishlist', compact('product'));
    }

    public function removewish($id)
    {
        $wishlist = wishlist::where('product_id', $id)->where('user', Auth::user()->id)->delete();
        return response()->json(['message' => 'Successfully Delete'], 200);
    }

    public function addWishlist($id)
    {
        $pAlready = 0;
        $wishlist = wishlist::where('product_id', $id)->where('user', Auth::user()->id)->get();

        if (count($wishlist) == 0) {
            $wish = new wishlist;
            $wish->product_id = $id;
            $wish->user = Auth::user()->id;
            $wish->save();
            $pAlready = 1;
        }
        //return redirect('wishlist');
        return response()->json(array($pAlready, count($wishlist)));
    }
    public function company()
    {
        return view('customer.company');
    }
    public function companyVerify()
    {
        return view('customer.companyVerify');
    }
    public function submitCompany(Request $request)
    {
        $request->validate([
            'company' => 'required',
            'gst' => 'required',
            'gst_doc' => 'required | mimes:jpeg,bmp,png',
        ]);
        $fileName = null;
        // if($request->file('gst_doc')!=""){
        $image = $request->gst_doc;
        $fileName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('gst_doc/'), $fileName);
        // }
        $company = new company;
        $company->company = $request->company;
        $company->user_id = Auth::user()->id;
        $company->gst = $request->gst;
        $company->gst_doc = $fileName;
        $company->save();
        //return response()->json($request->hasFile('gst_doc'));
        return redirect('/account/company-verify');
    }

    public function editCustomer($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function editShipping($id)
    {
        $citys = [
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
        $shipping = shipping::find($id);
        return view('customer.editShipping', compact('shipping', 'citys'));
    }
    public function editBilling($id)
    {
        $citys = [
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
        $billing = billing::find($id);
        return view('customer.editBilling', compact('billing', 'citys'));
    }
    public function deleteAddress($id)
    {
        $order_detail = order_detail::find($id);
        //return view('customer.editShipping');
        $order_detail->delete();
        return back()->withInput();
    }
    // public function updateCustomer(Request $request){
    //     $request->validate([
    //         'phone'=>'required|unique:Users,phone,'.$request->id,
    //         'email'=>'required|unique:Users,email,'.$request->id,
    //         'name'=>'required'
    //     ]);
    //     $User = User::find($request->id);
    //     $User->name = $request->name;
    //     $User->phone = $request->phone;
    //     $User->email = $request->email;
    //     $User->save();
    //     return response()->json($User);
    // }

    public function userchangePassword(Request $request)
    {
        $request->validate([
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $User = User::find(Auth::user()->id);
        $User->password = Hash::make($request->get('password'));
        $User->remember_token = $request->get('_token');
        $User->save();

        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/login');
    }

    public function updateAddress(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'telephone' => 'required|unique:order_details,telephone,' . $request->id,
            'email' => 'required|unique:order_details,email,' . $request->id,
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'zip' => 'required',
            'state' => 'required'
        ]);
        $order_detail = order_detail::find($request->id);
        $order_detail->first_name = $request->first_name;
        $order_detail->last_name = $request->last_name;
        $order_detail->telephone = $request->telephone;
        $order_detail->email = $request->email;
        $order_detail->address = $request->address;
        $order_detail->city = $request->city;
        $order_detail->country = $request->country;
        $order_detail->zip = $request->zip;
        $order_detail->state = $request->state;
        $order_detail->save();
        return redirect('/account/address');
    }
    public function address()
    {

        // $address = DB::table('orders')
        //     ->where('orders.customer_id',Auth::user()->id)
        //     ->join('order_details', 'orders.shipping', '=', 'order_details.id')
        //     ->select('*')
        //     ->orderBy('order_details.created_at','desc')
        //     ->get();
        $shipping = shipping::where('customer_id', Auth::user()->id)->get();
        $billing = billing::where('customer_id', Auth::user()->id)->get();
        return view('customer.address', compact('shipping', 'billing'));
    }

    public function changeAccountInfo(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . Auth::user()->id,
            'phone' => 'required|unique:users,phone,' . Auth::user()->id,
        ]);
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect('/account/dashboard');
        //return response()->json($user);
    }


    public function updateShipping(Request $request)
    {
        $shipping = shipping::find($request->id);
        $shipping->customer_id = Auth::user()->id;
        $shipping->first_name = $request->first_name;
        $shipping->last_name = $request->last_name;
        $shipping->email = $request->email;
        $shipping->telephone = $request->telephone;
        $shipping->address = $request->address;
        $shipping->city = $request->city;
        $shipping->state = $request->state;
        $shipping->zip = $request->zip;
        $shipping->country = $request->country;
        $shipping->save();
        return redirect('/account/address');
    }
    public function updateBilling(Request $request)
    {
        $billing = billing::find($request->id);
        $billing->customer_id = Auth::user()->id;
        $billing->first_name = $request->first_name;
        $billing->last_name = $request->last_name;
        $billing->email = $request->email;
        $billing->telephone = $request->telephone;
        $billing->address = $request->address;
        $billing->city = $request->city;
        $billing->state = $request->state;
        $billing->zip = $request->zip;
        $billing->country = $request->country;
        $billing->save();
        return redirect('/account/address');
    }
    public function deleteShipping($id)
    {
        shipping::find($id)->delete();
        return response()->json("200");
    }
    public function deleteBilling($id)
    {
        billing::find($id)->delete();
        return response()->json("200");
    }

    public function vieworders($id){
        $order = order::find($id);
        $order_items = order_item::where('order_id', $id)->get();
        $shipping = shipping::where('id', $order->shipping)->get();
        $billing = billing::where('id', $order->billing)->get();
        $product = product::find($order_items[0]->product_id);
        $review = review::where('user_id',Auth::user()->id)->where('order_item_id',$order_items[0]->id)->first();
        $rating = rating::where('user_id',Auth::user()->id)->where('order_item_id',$order_items[0]->id)->first();
        $ifPaint =  paintOrderDetails::where('order_id',$order->id)->get();
        //return response()->json($order_items);
        return view('customer.singleOrder',compact('order','order_items','billing','shipping','product','review','rating','ifPaint'));
    }

    //review
    public function review(){
        $id=Auth::user()->id;
        $review = DB::table('reviews')
            ->where('customer_id','=',$id)
            ->join('products', 'products.id', '=', 'reviews.product_id')
            ->select('reviews.*','products.product_image')
            ->get();
        return view('customer.review',compact('review'));
    }

    public function addReview(Request $request){

        $review = new review;
        $review->item_id = $request->item_id;
        $review->order_item_id = $request->order_item_id;
        $review->user_id = Auth::user()->id;
        $review->status = 0;
        $review->review = $request->reviews;
        $review->save();

        $rating = new rating;
        $rating->item_id = $request->item_id;
        $rating->order_item_id = $request->order_item_id;
        $rating->user_id = Auth::user()->id;
        $rating->status = 0;
        $rating->rating = $request->rating;
        $rating->save();
        return response()->json($request);
    }
    public function reReview(Request $request){
        $review = review::find($request->review_old);
        $review->review = $request->reviews;
        $review->save();
        if($request->rating !=0){
            $rating = rating::find($request->rating_old);
            $rating->rating = $request->rating;
            $rating->save();
        }
        return response()->json($request);
    }
    public function orderMail(){
        //$all = $request->all();
        // Mail::send('mail',compact('all'),function($message) use($all){
        //     $message->to('prasanthbca7@gmail.com','To LRB')->subject($all['cf_order_number']);
        //     $message->from('prasanthats@gmail.com','To Prasanth');
        // });
          $orderData = array(
              'email'=>'prasanthats@gmail.com',
              'name'=>'prasanth',
              'product_name'=>'Tiles',
              'status'=>'Order Placed'
          );
       Mail::to('prasanthats@gmail.com')->send(new OrderMailable($orderData));
        return 'Email was sent';
        // return response()->json(['message'=>'Successfully Send'],200);
        //return response()->json($orderData);
    }

    public function orderCancel($id){
        $order = order::find($id);
        $order->order_status = 5;
        $order->save();
        return redirect('/account/orders');
    }

    public function orderPrint($id){
        $order = order::find($id);
        $billing = billing::find($order->billing);
        $info = contactInfo::find(1);
        $item = order_item::where('order_id',$order->id)->get();
        $pdf = PDF::loadView('customer.printOrder', compact('order','billing','info','item'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('order.pdf');
        // return view('customer.printOrder',compact('order','billing'));
    }

    public function verifyOrder(){
        try{
            $six_digit_random_number = mt_rand(100000, 999999);
            $msg = 'Your Checkout Verification code is '.$six_digit_random_number;
            $requestParams = array(
                'route' => '3',
                'api-token' => '25p83e9*wu.0szd_4),7hyaokirlfbnvgcxj1mqt',
                'sender' => 'KASMDU',
                'numbers' => Auth::user()->phone,
                'message' => $msg,
            );
            //merge API url and parameters
            $apiUrl = "http://smspro.co.in/httpapi/v1/sendsms?";
            foreach($requestParams as $key => $val){
                $apiUrl .= $key.'='.urlencode($val).'&';
            }
            $apiUrl = rtrim($apiUrl, "&");

            //API call
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $apiUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_exec($ch);
            curl_close($ch);
            return response()->json($six_digit_random_number);
               }
               catch(Exception  $e){
                   return response()->json($e->getMessage());
               }

    }

    public function deals(){
        return view('customer.deals');
    }

}
