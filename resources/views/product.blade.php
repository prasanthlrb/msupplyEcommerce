@extends('layout.app')
@section('extra-css')

    <!-- Theme CSS
    ============================================ -->
    <link rel="stylesheet" href="/js/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="/js/fancybox/source/helpers/jquery.fancybox-thumbs.css">
    
@endsection
@section('content')


<div class="secondary_page_wrapper">

    <div class="container">

        <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

        <ul class="breadcrumbs">

            <li><a href="/">Home</a></li>
            <li><a href="/category/{{$breadcrumbs->id}}">{{$breadcrumbs->category_name}}</a></li>
            <li>{{$product1->product_name}}</li>
            
           
        </ul>

        <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

        <div class="row">

            <main class="col-md-9 col-sm-8">

                <!-- - - - - - - - - - - - - - Product images & description - - - - - - - - - - - - - - - - -->

                <section class="section_offset">

                    <div class="clearfix">

                        <!-- - - - - - - - - - - - - - Product image column - - - - - - - - - - - - - - - - -->

                        <div class="single_product">

                            <!-- - - - - - - - - - - - - - Image preview container - - - - - - - - - - - - - - - - -->

                            <div class="image_preview_container">
                                <?php if($product1->product_image != ""){ ?>
                                    <img id="img_zoom" data-zoom-image="{{asset('/product_img').'/'.$product1->product_image}}" src="{{asset('/product_img').'/'.$product1->product_image}}" alt="">
                                <?php } else{ ?>
                                    <img id="img_zoom" data-zoom-image="{{asset('/images/qv_img_1.jpg')}}" src="{{asset('/images/qv_img_1.jpg')}}" alt="">
                                <?php } ?>     
                                <!-- <button class="button_grey_2 icon_btn middle_btn open_qv"><i class="icon-resize-full-6"></i></button> -->

                            </div><!--/ .image_preview_container-->

                            <!-- - - - - - - - - - - - - - End of image preview container - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Prodcut thumbs carousel - - - - - - - - - - - - - - - - -->
                            
                            <div class="product_preview">

                                <div class="owl_carousel" id="thumbnails">
                                <a href="#" data-image="{{asset('/product_img').'/'.$product1->product_image}}" data-zoom-image="{{asset('/product_img').'/'.$product1->product_image}}">
                                    <img src="{{asset('/product_img').'/'.$product1->product_image}}" data-large-image="{{asset('/product_img').'/'.$product1->product_image}}" alt="">
                                </a>
                                @foreach($Upload as $upload1)
                                    @if(!empty($upload1))
                                    <a href="#" data-image="{{asset('/product_gallery').'/'.$upload1->filename}}" data-zoom-image="{{asset('/product_gallery').'/'.$upload1->filename}}">

                                        <img src="{{asset('/product_gallery').'/'.$upload1->resized_name}}" data-large-image="{{asset('/product_gallery').'/'.$upload1->filename}}" alt="">
                                    </a>
             
                                    @endif
                                @endforeach
                                    
                                </div><!--/ .owl-carousel-->
                                

                            </div><!--/ .product_preview-->
                            
                            <!-- - - - - - - - - - - - - - End of prodcut thumbs carousel - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Share - - - - - - - - - - - - - - - - -->
                            
                            <!-- <div class="v_centered">

                                <span class="title">Share this:</span>

                                <div class="addthis_widget_container">
                                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                    <a class="addthis_button_preferred_1"></a>
                                    <a class="addthis_button_preferred_2"></a>
                                    <a class="addthis_button_preferred_3"></a>
                                    <a class="addthis_button_preferred_4"></a>
                                    <a class="addthis_button_compact"></a>
                                    <a class="addthis_counter addthis_bubble_style"></a>
                                    </div>
                                </div>
                                
                            </div> -->
                            
                            <!-- - - - - - - - - - - - - - End of share - - - - - - - - - - - - - - - - -->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product image column - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description column - - - - - - - - - - - - - - - - -->

                        <div class="single_product_description">

                            <h3 class="offset_title"><a href="#">{{$product1->product_name}}</a></h3>

                            <!-- - - - - - - - - - - - - - Page navigation - - - - - - - - - - - - - - - - -->

                            <!-- <div class="page-nav">

                                <a href="#" class="page-prev"></a>
                                <a href="#" class="page-next"></a>

                            </div> -->

                            <!-- - - - - - - - - - - - - - End of page navigation - - - - - - - - - - - - - - - - -->
                            @if(count($rating)>0)
                            <div class="description_section v_centered">
                                <?php 
                                $rating_count;
                            
                                if(count($rating) > 1){
                                    $total=0;
                                    foreach($rating as $row){
                                        $total +=$row->rating;
                                    }
                                    $rating_count = $total/count($rating);
                                }else{
                                    $rating_count = $rating[0]->rating;
                                }


                                ?>

                                    <ul class="rating">

                                            <li class="active"></li>
                                            <li class="<?php echo $rating_count >= 2 ? 'active' : '' ?>"></li>
                                            <li class="<?php echo $rating_count >= 3 ? 'active' : '' ?>"></li>
                                            <li class="<?php echo $rating_count >= 4 ? 'active' : '' ?>"></li>
                                            <li class="<?php echo $rating_count >= 5 ? 'active' : '' ?>"></li>

                                        </ul>
                                
                                <ul class="topbar">

                                    <li><a href="#">{{count($reviews)}} Review(s)</a></li>
                                    <!-- <li><a href="#">Add Your Review</a></li> -->

                                </ul>

                                <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

                            </div>
                            @endif
                            <div class="description_section">

                                <table class="product_info">

                                    <tbody>

                                        <!-- <tr>

                                            <td>Vendor: </td>
                                         

                                        </tr> -->

                                        <tr>
                                        @if($product1->stock_quantity !="" && $product1->stock_quantity !=0)
                                            <td>Availability: </td>
                                            <td><span class="in_stock">in stock</span> {{$product1->stock_quantity}} item(s)</td>
                                        @else    
                                            <td>Availability: </td>
                                            <td><span style="color:red;">Out of Stock</span></td>
                                        @endif

                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                            <hr>

                    <!-- <div class="description_section">

                        <p>strip_tags($product1->product_description)</p>

                    </div> -->

                            <!-- <hr> -->

                            
                                @if($product1->regular_price !="")
                                    <p class="product_price"><s>₹{{$product1->regular_price}}</s> <b class="theme_color">₹{{$product1->sales_price}}</b></p>
                                @else    
                                    <p class="product_price"><b class="theme_color">₹{{$product1->sales_price}}</b></p>
                                @endif


                            <!-- - - - - - - - - - - - - - Product size - - - - - - - - - - - - - - - - -->
<form method="post" id="termsData">
{{ csrf_field() }}

                    
<?php $arraydata=array(); ?>
<?php $term_id=array(); ?>
<?php $x=0; ?>
@foreach($product_attribute as $data1)
    <?php $arraydata[]=''.$data1->attribute.''; ?>
@endforeach
@foreach($product_attribute as $testTerms)
@if($product1->id == $testTerms->product_id)
<?php $term_id[]=''.$testTerms->terms_id.''; ?>
@endif

@endforeach
                @foreach($attribute as $attri)
                    @if(in_array($attri->id, $arraydata))
                        <div class="description_section_2 v_centered">
                            <span class="title">{{$attri->name}}:</span>
                         
                            <?php
                             $term=array(); 

                             
                             ?>
                            @foreach($product_attribute as $pro_attri)
                           
                           
                              @if(!in_array($pro_attri->terms_id, $term ) && $attri->id == $pro_attri->attribute)
                              
                              @if(!in_array($pro_attri->terms_id, $term_id ) && $product1->id != $pro_attri->product_id)
                              <a href="/product-advance-filter/{{$product1->id}}/{{$pro_attri->attribute}}/{{$pro_attri->terms_id}}" class="button_grey">{{$pro_attri->terms}}</a>
                              @else
            
                              <a href="javascript:void(null)" class="button_grey active">{{$pro_attri->terms}}</a>
                             
                           
                             
                                @endif
                                
                                <?php 

                                $term[]=$pro_attri->terms_id;
                                  
                                ?>
                                
                             
                              @endif
                             
                             
                              
                              
                            @endforeach
                        </div>
                        <br>
                    @endif
                @endforeach            

                            
                            <div class="description_section_2 v_centered">
                                
                                <span class="title">Qty:</span>
                                <input type="hidden" id="shipping_amount" name="shipping_amount" value="{{$product1->shipping_amount}}">

                                <div class="qty min clearfix">
                                    <button class="theme_button" type="button" data-direction="minus">-</button>
                                    <input type="text" name="button_qty" value="1" id="button_qty">
                                    <button class="theme_button" type="button" data-direction="plus">+</button>

                                </div>

                            </div>

                            <!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                            <div class="buttons_row">
                                @if($product1->stock_quantity !="" && $product1->stock_quantity !=0)
                                <button type="button" onclick="addCart({{$product1->id}})" class="button_blue middle_btn">Add to Cart</button>
                            @else    
                            <button type="button" class="button_blue middle_btn">Coming Soon</button>
                            @endif
                             

                                <a href="/add-wishlist/{{$product1->id}}"><button type="button" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button></a>

                                <a href="javascript:void(null)" onclick="addCompare({{$product1->id}})"><button type="button" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button></a>

                            </div>

                            <!-- <button onclick="saveterms({{$product1->product_id}})" class="theme_button" type="button" >Check</button> -->

                            <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
</form>                 
                        </div>

                        <!-- - - - - - - - - - - - - - End of product description column - - - - - - - - - - - - - - - - -->

                    </div>

                </section><!--/ .section_offset -->

                <!-- - - - - - - - - - - - - - End of product images & description - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

                <div class="section_offset">

                    <div class="tabs type_2">

                        <ul class="tabs_nav clearfix">
                            <li class="active"><a href="#tab-1">Description</a></li>
                            <li><a href="#tab-2">Specifications</a></li>
                            @if($product1->review == 'on')
                            @if(count($reviews) > 0)
                            <li><a href="#tab-3">{{count($reviews)}} Review (s)</a></li>
                            @endif
                            @endif
                        </ul>
                        
                        <div class="tab_containers_wrap">

                            <div id="tab-1" class="tab_container">
                                @php
                                    echo $product1->product_description;
                                @endphp
                            </div>

                            <div id="tab-2" class="tab_container">
                                <ul class="specifications">
                                    <li><span>Weight:</span>{{$product1->weight}}</li>
                                    <li><span>Length:</span>{{$product1->length}}</li>
                                    <li><span>Width:</span>{{$product1->width}}</li>
                                    <li><span>Height:</span>{{$product1->height}}</li>
                                </ul>
                            </div>

                            <div id="tab-3" class="tab_container">
                                    <section class="section_offset">

                                            <h3>Customer Reviews</h3>
                                        @if(!empty($review))
                                       
                                            <ul class="reviews">
                                                    @foreach($review as $row)
                                                <li>
    
                                                    <!-- - - - - - - - - - - - - - Review - - - - - - - - - - - - - - - - -->
                                                    
                                                    <article class="review">
    
                                                        <!-- - - - - - - - - - - - - - Rates - - - - - - - - - - - - - - - - -->
    
                                                      
                                                        <!-- - - - - - - - - - - - - - End of rates - - - - - - - - - - - - - - - - -->
    
                                                        <!-- - - - - - - - - - - - - - Review body - - - - - - - - - - - - - - - - -->
    
                                                        <div class="review-body">
    
                                                            <div class="review-meta">
                                                            Review by <a href="#" class="bold">{{$row->name}}</a> on {{$row->updated_at}} 
                                                                
                                                                    <ul class="rating">
                                                                            <li class="active"></li>
                                                                            <li class="<?php echo $row->rating >= 2 ? 'active' : '' ?>"></li>
                                                                            <li class="<?php echo $row->rating >= 3 ? 'active' : '' ?>"></li>
                                                                            <li class="<?php echo $row->rating >= 4 ? 'active' : '' ?>"></li>
                                                                            <li class="<?php echo $row->rating >= 5 ? 'active' : '' ?>"></li>
                                                                        </ul>
    
    
                                                            </div>
    
                                                            <p>{{$row->review}}</p>
    
                                                        </div>
    
                                                        <!-- - - - - - - - - - - - - - End of review body - - - - - - - - - - - - - - - - -->
    
                                                    </article>
    
                                                    <!-- - - - - - - - - - - - - - End of review - - - - - - - - - - - - - - - - -->
    
                                                </li>
                                                @endforeach
                                               
                                               
    
                                            </ul>
                                            @endif
                                            @if ($review->lastPage() > 1)
                                            <ul class="pags">
                                                <li class="{{ ($review->currentPage() == 1) ? ' disabled' : '' }}">
                                                    <a href="{{ $review->url(1) }}">Previous</a>
                                                </li>
                                                @for ($i = 1; $i <= $review->lastPage(); $i++)
                                                    <li class="{{ ($review->currentPage() == $i) ? ' active' : '' }}">
                                                        <a href="{{ $review->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor
                                                <li class="{{ ($review->currentPage() == $review->lastPage()) ? ' disabled' : '' }}">
                                                    <a href="{{ $review->url($review->currentPage()+1) }}" >Next</a>
                                                </li>
                                            </ul>
                                            @endif
                                            <br>
                                                <br>
                                        </section><!--/ .section_offset -->
                            </div>

                        </div>


                    </div>

                </div>


             
@if(!empty($related_product))
<section class="section_offset">

    <h3 class="offset_title">Related Products</h3>

    <div class="owl_carousel related_products">


    @foreach($related_product as $r_product)
        <div class="product_item">


            <div class="image_wrap">

                <?php if($r_product->product_image != ""){ ?>
                    <img src="{{asset('/product_img').'/'.$r_product->product_image}}" alt="">
                <?php } else{ ?>
                    <img src="/images/product_img_30.jpg" alt="">
                <?php } ?> 


                <div class="actions_wrap">

                    <div class="centered_buttons">

                        <a href="#" class="button_dark_grey quick_view" data-modal-url="/quick-view/{{$r_product->id}}">Quick View</a>

                        <!-- <a href="#" class="button_blue add_to_cart">Add to Cart</a> -->

                    </div>

                    <a href="/add-wishlist/{{$r_product->id}}" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                    <a href="/compare-product/{{$r_product->id}}" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                </div>

            </div>

            <div class="label_new">New</div>


            <div class="description">

                <a href="/product/{{$r_product->id}}">{{$r_product->product_name}}</a>

                <div class="clearfix product_info">
                       

                            <?php 
                            $getRating = App\rating::where('item_id',$r_product->id)->get();
                            if(count($getRating) > 0){
                                $rating_count;
                            
                               
                            $total=0;
                            foreach($getRating as $row){
                                $total +=$row->rating;
                            }
                            $rating_count = $total/count($getRating);
                       
                            }
                               


                                ?>
                                @if(count($getRating) > 0)
                                    <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="<?php echo $rating_count >= 2 ? 'active' : '' ?>"></li>
                                            <li class="<?php echo $rating_count >= 3 ? 'active' : '' ?>"></li>
                                            <li class="<?php echo $rating_count >= 4 ? 'active' : '' ?>"></li>
                                            <li class="<?php echo $rating_count >= 5 ? 'active' : '' ?>"></li>

                                        </ul>
                                        @endif
                    <p class="product_price alignleft"><b>₹{{$r_product->sales_price}}</b></p>

                </div>

            </div>


        </div>
    @endforeach
    </div><!--/ .owl_carousel -->

</section><!--/ .section_offset -->
@endif

                <!-- - - - - - - - - - - - - - End of related products - - - - - - - - - - - - - - - - -->


            </main><!--/ [col]-->

            <aside class="col-md-3 col-sm-4">

                <!-- - - - - - - - - - - - - - Seller Information - - - - - - - - - - - - - - - - -->

                <section class="section_offset">

                </section>


           
                {{-- <section class="section_offset">
                    <h3 class="offset_title">You Might Also Like</h3>
                    <div class="owl_carousel widgets_carousel">
                        <ul class="products_list_widget">
                      
                            <li>
                                <a href="#" class="product_thumb">
                                    <img style="width:70px;height:50px;" src="" alt="">
                                </a>
                                <div class="wrapper">
                                    <a href="/product-view/" class="product_title"></a>
                                    <div class="clearfix product_info">
                                        <p class="product_price alignleft"><b>₹</b></p>
                                        <ul class="rating alignright">
                                            <!-- <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </li>
                      
                        </ul>

                        <ul class="products_list_widget">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>
                                
                                <a href="#" class="product_thumb">
                                    
                                    <img src="/images/product_thumb_7.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Diam eu massa quisque donec...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>₹5.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>
                                        
                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>
                                
                                <a href="#" class="product_thumb">
                                    
                                    <img src="/images/product_thumb_8.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Ut pharetra augue nec augue...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>₹8.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>

                                        </ul>
                                        
                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>
                                
                                <a href="#" class="product_thumb">
                                    
                                    <img src="/images/product_thumb_9.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Donec porta diam eu massa...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>₹76.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>

                                        </ul>
                                        
                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </ul><!--/ .list_of_products-->

                    </div>

                </section> --}}
             

                <!-- - - - - - - - - - - - - - End of you might also like - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->

                <div class="section_offset">

                    <section class="infoblock type_2">

                        <i class="icon-lock"></i>

                        <h4 class="caption"><b>Safe &amp; Secure Payment</b></h4>

                       
                    </section><!--/ .infoblock.type_2-->

                </div>

                <!-- - - - - - - - - - - - - - End infoblock - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Already viewed products - - - - - - - - - - - - - - - - -->

                {{-- <section class="section_offset">

                    <h3>Already Viewed Products</h3>

                    <ul class="products_list_widget">

                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                        <li>
                            
                            <a href="#" class="product_thumb">
                                
                                <img src="images/product_thumb_4.jpg" alt="">

                            </a>

                            <div class="wrapper">

                                <a href="#" class="product_title">Adipiscing aliquet sed in lacus...</a>

                                <div class="clearfix product_info">

                                    <p class="product_price alignleft"><b>₹5.99</b></p>

                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                    <ul class="rating alignright">

                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>

                                    </ul>
                                    
                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                </div>

                            </div>

                        </li>

                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                        <li>
                            
                            <a href="#" class="product_thumb">
                                
                                <img src="images/product_thumb_11.jpg" alt="">

                            </a>

                            <div class="wrapper">

                                <a href="#" class="product_title">Ut pharetra augue nec augue,...</a>

                                <div class="clearfix product_info">

                                    <p class="product_price alignleft"><s>₹19.99</s> <b>₹13.99</b></p>

                                </div>

                            </div>

                        </li>

                        <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                    </ul><!--/ .list_of_products-->

                </section> --}}

                <!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->

            </aside><!--/ [col]-->

        </div><!--/ .row-->

    </div><!--/ .container-->

</div><!--/ .page_wrapper-->

<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->


@endsection

@section('extra-js')
	
<!-- Include Libs & Plugins
    ============================================ -->
    <script src="/js/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="/js/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script src="/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script>
    		
    </script>
@endsection