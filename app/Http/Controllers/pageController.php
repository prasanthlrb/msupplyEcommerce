<?php

namespace App\Http\Controllers;

use App\home_setting;
use App\ContactInfo;
use App\faq;
use App\adModel;
use App\homeSlider;
use App\home_product_layout;
use App\category;
use App\product;
use App\upload;
use Session;
use App\transport;
use DB;
use App\brand;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Illuminate\Http\Request;
use App\rating;
use App\product_attribute;
use App\attribute;
use Cart;
use App\color;
use App\color_category;

class pageController extends Controller
{

    public function about()
    {
        $data = home_setting::find(1);
        // echo htmlspecialchars($data->about_us);
        return view('about', compact('data'));
    }
    public function terms()
    {
        $data = home_setting::find(1);
        return view('terms', compact('data'));
    }
    public function shipping_details()
    {
        $data = home_setting::find(1);
        return view('shipping_details', compact('data'));
    }
    public function privacy()
    {
        $data = home_setting::find(1);
        return view('privacy', compact('data'));
    }

    public function faq()
    {
        $faq = faq::all();
        return view('faq', compact('faq'));
    }

    public function contact()
    {
        $contact_info = Contactinfo::all();
        return view('contact', compact('contact_info'));
    }

    public function home()
    {
        try {
            $slider = homeSlider::orderBy('position', 'ASC')->get();
            $layouts = home_product_layout::orderBy('position', 'ASC')->get();
            $category = category::all();
            $product = product::all();
            $adModel = adModel::all();
            $product_today = product::where('featured', 'on')->orderBy('id', 'DESC')->take(10)->get();
            $output = '';
            foreach ($layouts as $layout) {
                if ($layout->type == 'category') {
                    foreach (explode(',', $layout->category_id) as $row) {
                        $layout_collection[] = $row;
                    }
                    $layout->category_id = $layout_collection;

                    $output .= '	<section class="section_offset animated transparent" data-animation="fadeInDown">';
                    $xcount = 1;
                    $output .= '<h3>' . $layout->title . '</h3>
            <div class="tabs type_2 products">
            <ul class="tabs_nav clearfix">';
                    foreach ($category as $cat) {
                        if (in_array($cat->id, $layout_collection)) {
                            $output .= '<li><a href="#tab-' . $xcount . '">' . $cat->category_name . '</a></li>';
                            $xcount++;
                        }
                    }

                    $output .= '</ul>
            <div class="tab_containers_wrap">';
                    $ycount = 1;
                    foreach ($category as $cat) {
                        if (in_array($cat->id, $layout_collection)) {
                            $output .= '<div id="tab-' . $ycount . '" class="tab_container">
			<div class="owl_carousel carousel_in_tabs">';
                            $product_data = product::where('category', 'LIKE', "%{$cat->id}%")->get();
                            foreach ($product_data as $row) {
                                $output .= '
            <div class="product_item type_2">
            <div class="image_wrap">
            <img src="' . asset('product_img/' . $row->product_image . '') . '" alt="">
            <div class="actions_wrap">
            <div class="centered_buttons">
            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view/' . $row->id . '">Quick View</a>
            </div>
            </div>
            </div>
            <div class="label_hot">Hot</div>
            <div class="description">
            <a href="/product/' . $row->id . '">' . $row->product_name . '</a>
            <div class="clearfix product_info">';

            $getRating = rating::where('item_id',$row->id)->get();
            $rating_count=0;
            if(count($getRating) > 0){
            $total=0;
            foreach($getRating as $rows){
                $total +=$rows->rating;
            }
            $rating_count = $total/count($getRating);

                $output .= '<ul class="rating alignright">

                            <li class="active"></li>

                            <li class="';
                            if($rating_count >= 2){

                                $output .= 'active';
                            }
                            $output .= '"></li>

                            <li class="';
                            if($rating_count >= 3){

                                $output .= 'active';
                            }
                            $output .= '"></li>

                            <li class="';
                            if($rating_count >= 4){

                                $output .= 'active';
                            }
                            $output .= '"></li>

                            <li class="';
                            if($rating_count >= 5){

                                $output .= 'active';
                            }
                            $output .= '"></li>


                        </ul>';

            }
                        $output .= '<p class="product_price alignleft">';

                                if ($row->sales_price != null) {
                                    $output .= ' <s>₹ ' . $row->regular_price . '</s>
                        <b>₹ ' . $row->sales_price . '</b></p>';
                                } else {
                                    $output .= '<b>₹ ' . $row->regular_price . '</b></p>';
                                }
                                $output .= '
            </div>
            </div>
            <div class="buttons_row">
            <a href="/product/' . $row->id . '" class="button_blue middle_btn">See Product Details</a>
			<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>

            </div></div>';
                            }
                            $output .= '</div>
            <footer class="bottom_box">
            <a href="#" class="button_grey middle_btn">View All Products</a>
            </footer></div>';
                            $ycount++;
                        }
                    }

                    $output .= '</div>
				</div>
            </section>';
                } else {
                    foreach (explode(',', $layout->product_id) as $row) {
                        $layout_prod_collection[] = $row;
                    }

                    $output .= '
            <section class="section_offset animated transparent" data-animation="fadeInDown">
                <h3 class="offset_title">' . $layout->title . '</h3>
                <div class="owl_carousel carousel_in_tabs">';
                    $layout_prod = product::whereIn('id', $layout_prod_collection)->get();
                    foreach ($layout_prod as $row) {
                        $output .= '
                <div class="product_item type_2">
                    <div class="image_wrap">
                    <img src="' . asset('product_img/' . $row->product_image . '') . '" alt="">
                        <div class="actions_wrap">
                            <div class="centered_buttons">
                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view/' . $row->id . '">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                    <a href="#">' . $row->product_name . '</a>
                        <div class="clearfix product_info"> ';

                        $getRating = rating::where('item_id',$row->id)->get();
            $rating_count=0;
            if(count($getRating) > 0){
            $total=0;
            foreach($getRating as $rows){
                $total +=$rows->rating;
            }
            $rating_count = $total/count($getRating);

                $output .= '<ul class="rating alignright">

                            <li class="active"></li>

                            <li class="';
                            if($rating_count >= 2){

                                $output .= 'active';
                            }
                            $output .= '"></li>

                            <li class="';
                            if($rating_count >= 3){

                                $output .= 'active';
                            }
                            $output .= '"></li>

                            <li class="';
                            if($rating_count >= 4){

                                $output .= 'active';
                            }
                            $output .= '"></li>

                            <li class="';
                            if($rating_count >= 5){

                                $output .= 'active';
                            }
                            $output .= '"></li>


                        </ul>';

            }
                       $output.=' <p class="product_price alignleft">';

                        if ($row->sales_price != null) {
                            $output .= ' <s>₹ ' . $row->regular_price . '</s>
                                    <b>₹ ' . $row->sales_price . '</b></p>';
                        } else {
                            $output .= '<b>₹ ' . $row->regular_price . '</b></p>';
                        }



                        $output .= ' </div>
                    </div>
                <div class="buttons_row">
                    <a href="/product/' . $row->id . '" class="button_blue middle_btn">See Product Details</a>
                    <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>

                </div>
            </div>';
                    }
                    $output .= '
        </div>

                   <footer class="bottom_box">
                    <a href="#" class="button_grey middle_btn">View All Products</a>
                    </footer>


               </section>';
                }
            }
            return view('home', compact('slider', 'layouts', 'output', 'product_today', 'adModel'));

            //  foreach($product_today as $row){
            //     return response()->json($row);
            //  }
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }
    }

    public function categoryTree()
    {
        $category = category::all();
        foreach ($category as $row) {
            $sub_data = array(
                'id' => $row->id,
                'name' => $row->category_name,
                'text' => $row->category_name,
                'parent_id' => $row->parent_id
            );
            $data[] = $sub_data;
        }
        foreach ($data as $key => &$value) {
            $output[$value['id']] = &$value;
        }
        foreach ($data as $key => &$value) {
            if ($value["parent_id"] && isset($output[$value["parent_id"]])) {
                $output[$value["parent_id"]]["nodes"][] = &$value;
            }
        }
        foreach ($data as $key => &$value) {
            if ($value["parent_id"] && isset($output[$value["parent_id"]])) {
                unset($data[$key]);
            }
        }
        //     <ul>
        //     <li><a href='#'><span>Home</span></a></li>
        //     <li class='has-sub has-new-sub'><a href='#'><span>Products</span></a>
        //        <ul class="first-child"><!-- over all child bro -->
        //           <li class='has-sub has-new-sub'><a href='#'><span>Product 1</span></a>
        //              <ul class="second-child">
        //                 <li class="has-sub has-new-sub"><a href='#'class='has-sub has-new-sub'><span>Sub Product</span></a>
        //                       <ul class="second-child">
        //                          <li><a href='#'><span>Sub Product</span></a></li>
        //                          <li class='last'><a href='#'><span>Sub Product</span></a></li>
        //                          <li class='last'><a href='#'><span>Sub Product</span></a></li>
        //                          <li class='last'><a href='#'><span>Sub Product</span></a></li>
        //                          <li class='last'><a href='#'><span>Sub Product</span></a></li>
        //                       </ul><!-- inner product menu -->
        //                 </li>
        //                 <li class='last'><a href='#'><span>Sub Product</span></a></li>
        //              </ul>
        //           </li><!-- 2nd level menu end here -->
        //           <li class='has-sub has-new-sub'><a href='#'><span>Product 2</span></a>
        //              <ul class="second-child">
        //                 <li><a href='#'><span>Sub Product</span></a></li>
        //                 <li class='last'><a href='#'><span>Sub Product</span></a></li>
        //              </ul>
        //           </li>
        //           <li><a href='#'><span>Product 3</span></a></li>
        //        </ul>
        //     </li>
        //     <li><a href='#'><span>About</span></a></li>
        //     <li class='last'><a href='#'><span>Contact</span></a></li>
        //  </ul>
        //     $output ='<div id="cssmenu" class="animated_item"><ul>';
        // foreach($data as $menu1){
        //     $m1 = count($menu1['nodes']);
        //     if($m1 > 0){
        //         $output .='<li><a href=""><span>'.$menu1['name'].'</span></a></li>';
        //     }else{
        //         $output .='<li class="has-sub has-new-sub"><a href="#"><span>'.$menu1['name'].'</span></a>
        //         <ul class="first-child">';
        //         foreach($menu1 as $menu2){
        //             if(response()->json(count($menu2['nodes'])) > 0){
        //                 $output .='<li class="last"><a href="#"><span>menu2</span></a></li></li>';
        //             }else{
        //                 $output .='<li class="active has-sub has-new-sub"><a href="#"><span>menu2</span></a>
        //                 <ul class="second-child">';
        //                 foreach($menu2 as $menu3){
        //                     if(response()->json(count($menu3['nodes'])) > 0){
        //                         $output .='<li class="last"><a href="#"><span>menu2</span></a></li></li>';
        //                     }else{
        //                         $output .='<li class="active has-sub has-new-sub"><a href="#"><span>menu2</span></a>
        //                         <ul class="second-child">';
        //                     }

        //                 }
        //             }
        //         }
        //     }
        // }

        //   $output .='</ul>';
        echo '<pre>';
        echo '</pre>';
        foreach ($data as $d1) {
            echo count($d1['nodes']);
        }
    }

    public function quickModel($id)
    {
        $upload = upload::where('product_id', $id)->get();
        $product = product::find($id);

        $output = '
     <div id="quick_view" class="modal_window">

     <button class="close arcticmodal-close"></button>

     <div class="clearfix">

           <div class="single_product">

                 <div class="image_preview_container" id="qv_preview">';
        if ($product->product_image != "") {
            $output .= '<img id="img_zoom" data-zoom-image="images/product_img5.JPG" src="' . asset('/product_img') . '/' . $product->product_image . '" alt="">';
        } else {
            $output .= '<img src="images/qv_thumb_2.jpg" alt="">';
        }
        $output .= '</div>
                 <div class="product_preview" data-output="#qv_preview">
                       <div class="owl_carousel" id="thumbnails">';
        $output .= '<img src="' . asset('/product_img') . '/' . $product->product_image . '" data-large-image="' . asset('/product_img') . '/' . $product->product_image . '" alt="">';
        foreach ($upload as $upload1) {
            if (!empty($upload1)) {
                $output .= '<img src="' . asset('/product_gallery') . '/' . $upload1->filename . '" data-large-image="' . asset('/product_gallery') . '/' . $upload1->filename . '" alt="">';
            } else {
                $output .= '<img src="images/qv_thumb_2.jpg" data-large-image="images/qv_img_2.jpg" alt="">';
            }
        }
        $output .= '</div>
                 </div>
                 <div class="v_centered">
                       <span class="title">Share this:</span>
                       <div class="addthis_widget_container">
                             <!-- AddThis Button BEGIN -->
                             <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                             <a class="addthis_button_preferred_1"></a>
                             <a class="addthis_button_preferred_2"></a>
                             <a class="addthis_button_preferred_3"></a>
                             <!-- <a class="addthis_button_preferred_4"></a> -->
                             <a class="addthis_button_compact"></a>
                             <a class="addthis_counter addthis_bubble_style"></a>
                             </div>
                             <!-- AddThis Button END -->
                       </div>

                 </div>


           </div>


           <div class="single_product_description">

                 <h3><a href="/product/' . $product->id . '">' . $product->product_name . '
                 </a></h3>

                 <div class="description_section v_centered">
                 </div>

                 <div class="description_section">
                       <table class="product_info">
                             <tbody>
                                   <tr>
                                         <td>Availability: </td>';
        if ($product->stock_quantity != "") {
            $output .= '<td><span class="in_stock">in stock</span> ' . $product->stock_quantity . ' item(s)</td>';
        } else {
            $output .= '<td><span style="color:red;">Out of Stock</span></td>';
        }

        $output .= '</tr>
                                   <tr>
                                         <td>Shipping Details: </td>';
        if ($product->shipping_type == 1) {
            $output .= '<td><span class="success">Free Shipping</span></td>';
        } else {
            $output .= '<td><span class="success">Paid Shipping ₹ ' . $product->shipping_amount . '</span></td>';
        }
        $output .= '</tr>
                             </tbody>
                       </table>
                 </div>
                 <hr>
                 <div class="description_section">
                     <p>' . $product->product_description . '</p>
                 </div>
                 <hr>';
        if ($product->regular_price != "") {
            $output .= ' <p class="product_price"><s>₹' . $product->regular_price . '</s> <b class="theme_color">₹' . $product->sales_price . '</b></p>';
        } else {
            $output .= ' <p class="product_price"><b class="theme_color">₹' . $product->sales_price . '</b></p>';
        }

        $output .= '<form method="post" id="termsData">' . csrf_field() . '
     ';

        $output .= '
                 <input type="hidden" id="shipping_amount" name="shipping_amount" value="' . $product->shipping_amount . '">
                 <div class="buttons_row">
                     <a class="button_blue middle_btn" href="/product/' . $product->id . '">See product details</a>
                     <a href="/add-wishlist/' . $product->id . '"><button type="button" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button></a>

                 </div>
     </form>
           </div>
     </div>

     </div>
     ';

        echo $output;
    }



    public function getCompare($id)
    {
        $product = $id;
        $arraydata = array();
        if (!empty(Session::get('compare'))) {
            foreach (Session::get('compare') as $data) {
                $arraydata[] = $data;
            }
        }
        if (!in_array($product, $arraydata)) {
            Session::push('compare', $product);
        }
        return redirect('compare');
    }

    public function removeCompare($id)
    {
        $remove = '' . $id . '';

        if (Session::has('compare')) {
            foreach (Session::get('compare') as $key => $value) {
                if ($value === $remove) {
                    Session::pull('compare.' . $key); // retrieving the value and remove it from the array
                    break;
                }
            }
        }
        return redirect('compare');
    }

    public function addCompare($id)
    {
        $pAlready = 0;
        if (Session::has('compare')) {
            if (!in_array($id, Session::get('compare'))) {
                Session::push('compare', $id);
                $pAlready = 1;
            }
        } else {
            Session::push('compare', $id);
            $pAlready = 1;
        }
        // $product = $id;
        // $arraydata=array();
        // if(!empty(Session::get('compare'))){
        //     foreach(Session::get('compare') as $data){
        //         $arraydata[]=$data;
        //     }
        // }
        // if(!in_array($product, $arraydata)){
        //     Session::push('compare', $arraydata);
        // }
        return response()->json(array($pAlready, count(Session::get('compare'))));
    }




    public function transportPopup($id)
    {
        $id = 3;
        $upload = upload::where('product_id', $id)->get();
        $product = product::find($id);
        $output = '
 <div id="quick_view" class="modal_window">
 <button class="close arcticmodal-close"></button>
 <div class="clearfix">
 <div class="single_product">
 <div class="image_preview_container" id="qv_preview">';
        if ($product->product_image != "") {
            $output .= '<img id="img_zoom" data-zoom-image="images/product_img5.JPG" src="' . asset('/product_img') . '/' . $product->product_image . '" alt="">';
        } else {
            $output .= '<img src="images/qv_thumb_2.jpg" alt="">';
        }
        $output .= '</div>
             <div class="product_preview" data-output="#qv_preview">
             <div class="owl_carousel" id="thumbnails">';
        $output .= '<img src="' . asset('/product_img') . '/' . $product->product_image . '" data-large-image="' . asset('/product_img') . '/' . $product->product_image . '" alt="">';
        foreach ($upload as $upload1) {
            if (!empty($upload1)) {
                $output .= '<img src="' . asset('/product_gallery') . '/' . $upload1->filename . '" data-large-image="' . asset('/product_gallery') . '/' . $upload1->filename . '" alt="">';
            } else {
                $output .= '<img src="images/qv_thumb_2.jpg" data-large-image="images/qv_img_2.jpg" alt="">';
            }
        }
        $output .= '</div>
             </div>

       </div>
       <div class="single_product_description">

        <h3>Select Transport(shipping)</h3>

        <div class="theme_box">

            <p class="form_caption">Enter your destination to get a shipping estimate.</p>

            <form id="estimate_shipping" class="type_2">

                <ul>

                    <li class="row">

                        <div class="col-xs-12">

                            <label>Country</label>

                            <div class="custom_select">

                                <select>

                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Canada">Canada</option>
                                    <option selected value="USA">USA</option>

                                </select>

                            </div>

                        </div>

                    </li>

                    <li class="row">

                        <div class="col-lg-7 col-md-6">

                            <label>State/Province</label>

                            <div class="custom_select">

                                <select>

                                    <option value="Alabama">Alabama</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Kansas">Kansas</option>

                                </select>

                            </div>

                        </div><!--/ [col] -->

                        <div class="col-lg-5 col-md-6">

                            <label for="postal_code">Zip/Postal Code</label>
                            <input type="text" name="" id="postal_code">

                        </div><!--/ [col] -->

                    </li>

                </ul>

            </form>

        </div><!--/ .theme_box -->

        <footer class="bottom_box">

            <button type="submit" form="estimate_shipping" class="button_grey middle_btn">Get a Quote</button>

        </footer><!--/ .bottom_box -->

    </section><!--/ [col] -->
       </div>
 </div>

 </div>
 ';

        echo $output;
    }

    public function getTransportData($id)
    {
        $transport = transport::find($id);
        return response()->json($transport);
    }

    public function transportDetails(Request $request)
    {
        Session::forget('transport');
        Session::push('transport', $request->datas['data']);
        //return response()->json($transport);
        return response()->json(Session::get('transport'));
    }

    public function filter(Request $request){
        $brand = brand::all();
        $search = $request->search;
        $category = $request->category;
        if($search != "" && $category !="All Categories"){
            $product = DB::table('products')
            ->where('products.category', 'like', '%' . $category . '%')
            ->orWhere('product_name', 'like', '%' . $search . '%')
            ->orderBy('created_at','desc')
            ->paginate(9);
        }else if($search == "" && $category =="All Categories"){
            $product = [];
        }else if($search != "" && $category =="All Categories"){
            $product = DB::table('products')
            ->where('product_name', 'like', '%' . $search . '%')
            ->orderBy('created_at','desc')
            ->paginate(9);
        }else{
            $product = DB::table('products')
            ->where('products.category', 'like', '%' . $category . '%')
            ->orderBy('created_at','desc')
            ->paginate(9);
        }
        return view('filterView',compact('product','brand'))->withInput(['search' => $search]);
    }

    //public function contactMail(){
    public function contactMail(Request $request){
        //$all = $request->all();
        // Mail::send('mail',compact('all'),function($message) use($all){
        //     $message->to('prasanthbca7@gmail.com','To LRB')->subject($all['cf_order_number']);
        //     $message->from('prasanthats@gmail.com','To Prasanth');
        // });
         $contactData = $request->all();
        Mail::to($contactData['cf_email'])->send(new SendMailable($contactData));
        //return 'Email was sent';
        return response()->json(['message'=>'Successfully Send'],200);
        //return response()->json($contactData['cf_email']);
    }

    public function addToCart($id, $qty){
        $cart_qty = Cart::get($id);
        $product = product::find($id);
        $totalQty = $cart_qty['quantity'] + $qty;
        if($product->stock_quantity >= $totalQty){
            $product_attribute = product_attribute::where('product_id','=',$id)->get();
            $data=array();

                    foreach($product_attribute as $attributes){
                        $attribute = attribute::find($attributes->attribute);
                        $data[] = array(
                            $attribute->name => $attributes->terms,
                        );
                    }
            Cart::add(array(
                'id' => $id,
                'name' => $product->product_name,
                'price' => $product->sales_price,
                'quantity' => $qty,
                'attributes' =>$data,
            ));
            $status =0;
        }else{
            $status =1;
        }

    $total = Cart::getTotal();
    $quantity = count(Cart::getContent());
     return response()->json(array($status,$total,$quantity));
   // return response()->json($totalQty);
    }
    public function colorModals(){
        $category = color_category::where('status',0)->get();
        $color = color::where('category',$category[0]->id)->get();
        return view('modal.colors',compact('category','color'));
    }



    public function getColorById($id){
        if($id == 0){
        $category = color_category::where('status',0)->get();
        $color = color::where('category',$category[0]->id)->get();
        }else{

            $color = color::where('category',$id)->get();
        }
        $output='';
        if(count($color) > 0){
            foreach($color as $data){
            $output .='<div class="col-md-3">
            <div class="card mb-1 color-item" id="color-item'.$data->id.'" onclick="getColors('.$data->id.')">
              <div class="card-content">
                <div class="bg-lighten-1 height-50" style="background-color:'.$data->color.'"></div>
                <div class="p-1">
                  <p class="mb-0">
                    <strong>'.$data->name.'</strong>
                    <p class="text-muted float-right price"><i class="icon-rupee"></i>'.$data->price.'</p>
                  </p>
                  <p class="mb-0">'.$data->code.'</p>
                </div>
              </div>
            </div>
          </div>';
            }
        }else{
            $output .='<h3>Color Not Fount</h3>';
        }
        return response()->json($output);
    }

    public function getSearchColors(Request $request){
        $color = color::where("name","LIKE","%{$request->result}%")
        ->orWhere("code","LIKE","%{$request->result}%")
        ->get();
        $output='';
        if(count($color) > 0){
            foreach($color as $data){
            $output .='<div class="col-md-3">
            <div class="card mb-1 color-item" id="color-item'.$data->id.'" onclick="getColors('.$data->id.')">
              <div class="card-content">
                <div class="bg-lighten-1 height-50" style="background-color:'.$data->color.'"></div>
                <div class="p-1">
                  <p class="mb-0">
                    <strong>'.$data->name.'</strong>
                    <p class="text-muted float-right price"><i class="icon-rupee"></i>'.$data->price.'</p>
                  </p>
                  <p class="mb-0">'.$data->code.'</p>
                </div>
              </div>
            </div>
          </div>';
            }
        }else{
            $output .='<h3>Color Not Fount</h3>';
        }
        return response()->json($output);
    }

    public function selectedColor($id){
        $color = color::find($id);
        return response()->json($color);
    }

    public function postCartItem(Request $request){
        return response()->json("200");
    }
}
