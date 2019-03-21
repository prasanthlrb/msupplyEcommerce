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
use Illuminate\Http\Request;

class pageController extends Controller
{
   
    public function about(){
        $data = home_setting::all();
        return view('about',compact('data'));
       }
       public function terms(){
        $data = home_setting::all();
        return view('terms',compact('data'));
       }
       public function shipping_details(){
        $data = home_setting::all();
        return view('shipping_details',compact('data'));
       }
       public function privacy(){
        $data = home_setting::all();
        return view('privacy',compact('data'));
       }
    
       public function faq(){
        $faq = faq::all();
        return view('faq',compact('faq'));
       }
    
       public function contact(){
        $contact_info = Contactinfo::all();
        return view('contact',compact('contact_info'));
       }

       public function home(){
           $slider = homeSlider::all();
           $layouts = home_product_layout::all();
           $category = category::all();
           $product = product::all();
           $product_today = product::where('hot_product','on')->orderBy('id', 'DESC')->take(10)->get();
           $output ='';
           foreach($layouts as $layout){
               if($layout->type == 'category'){
            foreach(explode(',', $layout->category_id) as $row) {
                $layout_collection[] = $row;        
            }
			$layout->category_id = $layout_collection;
			
			$output .='	<section class="section_offset animated transparent" data-animation="fadeInDown">';
            $xcount =1;
            $output .='<h3>'.$layout->title.'</h3>
            <div class="tabs type_2 products">
            <ul class="tabs_nav clearfix">';
            foreach($category as $cat){
                if(in_array($cat->id,$layout_collection)){
					$output .= '<li><a href="#tab-'.$xcount.'">'.$cat->category_name.'</a></li>'; 
					$xcount++;
                }
			}
         
            $output .='</ul>
            <div class="tab_containers_wrap">';
            $ycount=1;
            foreach($category as $cat){
                if(in_array($cat->id,$layout_collection)){
            $output .='<div id="tab-'.$ycount.'" class="tab_container">
			<div class="owl_carousel carousel_in_tabs">';
            $product_data = product::where('category','LIKE',"%{$cat->id}%")->get();
            foreach($product_data as $row){
            $output .='
            <div class="product_item type_2">
            <div class="image_wrap">
            <img src="'. asset('product_img/'.$row->product_image.'').'" alt="">
            <div class="actions_wrap">
            <div class="centered_buttons">
            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
            </div>
            </div>
            </div>
            <div class="label_hot">Hot</div>
            <div class="description">
            <a href="#">'.$row->product_name.'</a>
            <div class="clearfix product_info">
            <p class="product_price alignleft">';
                       
            if($row->sales_price != null){
                $output .=' <s>₹ '.$row->regular_price.'</s>
                        <b>₹ '.$row->sales_price.'</b></p>';
            }else{
                $output .='<b>₹ '.$row->regular_price.'</b></p>';
            }
       
           
              
           $output .='
            </div>
            </div>
            <div class="buttons_row">
            <button class="button_blue middle_btn">Add to Cart</button>
			<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
			<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>
            </div></div>';
            }
            $output .='</div>
            <footer class="bottom_box">
            <a href="#" class="button_grey middle_btn">View All Products</a>
            </footer></div>';
            $ycount++;
                                    }
                                }
                             
            $output .='</div>
				</div>
            </section>';
            }else{
                foreach(explode(',', $layout->product_id) as $row) {
                    $layout_prod_collection[] = $row;        
                }

            $output .='
            <section class="section_offset animated transparent" data-animation="fadeInDown">
                <h3 class="offset_title">'.$layout->title.'</h3>
                <div class="owl_carousel carousel_in_tabs">';
                $layout_prod = product::whereIn('id',$layout_prod_collection)->get();
                foreach($layout_prod as $row){
            $output .=' 
                <div class="product_item type_2">
                    <div class="image_wrap">
                    <img src="'.asset('product_img/'.$row->product_image.'').'" alt="">
                        <div class="actions_wrap">
                            <div class="centered_buttons">
                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                    <a href="#">'.$row->product_name.'</a>
                        <div class="clearfix product_info"> <p class="product_price alignleft">';
                       
                        if($row->sales_price != null){
                            $output .=' <s>₹ '.$row->regular_price.'</s>
                                    <b>₹ '.$row->sales_price.'</b></p>';
                        }else{
                            $output .='<b>₹ '.$row->regular_price.'</b></p>';
                        }
                   
                       
                          
                       $output .=' </div>
                    </div>
                <div class="buttons_row">
                    <button class="button_blue middle_btn">Add to Cart</button>
                    <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                    <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>
                </div>
            </div>';
                }
            $output .='
        </div>

                   <footer class="bottom_box">
                    <a href="#" class="button_grey middle_btn">View All Products</a>
                    </footer>

                   
               </section>';
               }
           }
        return view('home',compact('slider','layouts','output','product_today'));
        // return response()->json($output);
       }
       
       public function menuGet(){

       }
       public function categoryTree(){
        $category = category::all();
        // foreach ($category as $row) {
        //    $sub_data = array(
        //        'id' => $row->id,
        //        'name' => $row->category_name,
        //        'text' => $row->category_name,
        //        'parent_id' => $row->parent_id
        //    );
        //    $data[] = $sub_data;
        // }
        // foreach ($data as $key => &$value) {
        //   $output[$value['id']] = &$value;
        // }
        // echo '<pre>';
        // print_r($output);
        // echo '</pre>';
        // foreach ($data as $key => &$value) {
        //    if ($value["parent_id"] && isset($output[$value["parent_id"]])) {
        //       $output[$value["parent_id"]]["nodes"][] =&$value;
        //    }
        // }
        // foreach ($data as $key => &$value) {
        //    if ($value["parent_id"] && isset($output[$value["parent_id"]])) {
        //       unset($data[$key]);
        //    }
        // }

        $output ='<div id="cssmenu">
        <ul>';
        foreach ($category as $row) {
            if($row->parent_id !=0){
                $output .=' <li class="active has-sub has-new-sub"><a href="#"><span>'.$row->category_name.'</span></a>
                <ul class="first-child">';
            }else{
                $output .='<li><a href="#"><span>'.$row->category_name.'</span></a></li>';
            }
        }
        $output .=' 
        <li class="active has-sub has-new-sub"><a href="#"><span>Products</span></a>
              <ul class="first-child"><!-- over all child bro -->
                 <li class="has-sub has-new-sub"><a href="#"><span>Product 1</span></a>
                    <ul class="second-child">
                       <li class="has-sub has-new-sub"><a href="#"class="has-sub has-new-sub"><span>Sub Product</span></a>
                             <ul class="second-child">
                                <li><a href="#"><span>Sub Product</span></a></li>
                                <li class="last"><a href="#"><span>Sub Product</span></a></li>
                                <li class="last"><a href="#"><span>Sub Product</span></a></li>
                                <li class="last"><a href="#"><span>Sub Product</span></a></li>
                                <li class="last"><a href="#"><span>Sub Product</span></a></li>                                               
                             </ul><!-- inner product menu -->
                       </li>
                       <li class="last"><a href="#"><span>Sub Product</span></a></li>
                    </ul>
                 </li><!-- 2nd level menu end here -->
                 <li class="has-sub has-new-sub"><a href="#"><span>Product 2</span></a>
                    <ul class="second-child">
                       <li><a href="#"><span>Sub Product</span></a></li>
                       <li class="last"><a href="#"><span>Sub Product</span></a></li>
                    </ul>
                 </li>
                 <li><a href="#"><span>Product 3</span></a></li>
              </ul>
           </li>';

           $output .='
        </ul>
        </div>';
      
        echo '<pre>';
        print_r($data);
        echo '</pre>';
       
    }
}
