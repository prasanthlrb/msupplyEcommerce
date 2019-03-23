@extends('layout.app')
@section('extra-css')

    <!-- Theme CSS
    ============================================ -->
    <link rel="stylesheet" href="/js/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="/js/fancybox/source/helpers/jquery.fancybox-thumbs.css">
    
@endsection
@section('content')


<div class="secondary_page_wrapper">
@foreach($product as $product1)
    <div class="container">

        <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

        <ul class="breadcrumbs">

            <li><a href="/">Home</a></li>
            <li>
           
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
                                    <img id="img_zoom" data-zoom-image="{{asset('product_img/').'/'.$product1->product_image}}" src="{{asset('product_img/').'/'.$product1->product_image}}" alt="">
                                <?php } else{ ?>
                                    <img id="img_zoom" data-zoom-image="{{asset('images/qv_img_1.jpg')}}" src="{{asset('images/qv_img_1.jpg')}}" alt="">
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
                                    <a href="#" data-image="{{asset('/product_gallery').'/'.$upload1->resized_name}}" data-zoom-image="{{asset('/product_gallery').'/'.$upload1->filename}}">

                                        <img src="{{asset('/product_gallery').'/'.$upload1->resized_name}}" data-large-image="{{asset('/product_gallery').'/'.$upload1->resized_name}}" alt="">
                                    </a>
                                    @else
                                    <a href="#" data-image="{{asset('/images/qv_img_1.jpg')}}" data-zoom-image="{{asset('/images/qv_large_1.jpg')}}">

                                        <img src="{{asset('/images/qv_thumb_1.jpg')}}" data-large-image="{{asset('/images/qv_img_1.jpg')}}" alt="">

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

                            <div class="description_section v_centered">
                                
                                <ul class="topbar">

                                    <li><a href="#"> Review(s)</a></li>
                                    <!-- <li><a href="#">Add Your Review</a></li> -->

                                </ul>

                                <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

                            </div>

                            <div class="description_section">

                                <table class="product_info">

                                    <tbody>

                                        <!-- <tr>

                                            <td>Vendor: </td>
                                         

                                        </tr> -->

                                        <tr>
                                        @if($product1->stock_quantity !="")
                                            <td>Availability: </td>
                                            <td><span class="in_stock">in stock</span> {{$product1->stock_quantity}} item(s)</td>
                                        @else    
                                            <td>Availability: </td>
                                            <td><span style="color:red;">Out of Stock</span></td>
                                        @endif

                                        </tr>

                                        <tr>

                                            <td>Shipping Details: </td>
                                            <td>@if($product1->shipping_type == 1)
                                                <span class="success">Free Shipping</span>
                                                @else
                                                <span class="success">Paid Shipping AED{{$product1->shipping_amount}}</span>
                                                @endif</td>

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
                                    <p class="product_price"><s>AED{{$product1->regular_price}}</s> <b class="theme_color">AED{{$product1->sales_price}}</b></p>
                                @else    
                                    <p class="product_price"><b class="theme_color">AED{{$product1->sales_price}}</b></p>
                                @endif


                            <!-- - - - - - - - - - - - - - Product size - - - - - - - - - - - - - - - - -->
<form method="post" id="termsData">
{{ csrf_field() }}

                    
                                

                            
                            <div class="description_section_2 v_centered">
                                
                                <span class="title">Qty:</span>
                                <input type="hidden" id="shipping_amount" name="shipping_amount" value="{{$product1->shipping_amount}}">

                                <div class="qty min clearfix">
                                    <button class="theme_button" type="button" data-direction="minus">-</button>
                                    <input type="text" name="button_qty" value="1">
                                    <button class="theme_button" type="button" data-direction="plus">+</button>

                                </div>

                            </div>

                            <!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                            <div class="buttons_row">

                                <button type="button" onclick="addCart({{$product1->product_id}})" class="button_blue middle_btn">Add to Cart</button>

                                <a href="/add-wishlist/{{$product1->product_id}}"><button type="button" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button></a>

                                <a href="/compare-product/{{$product1->product_id}}"><button type="button" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button></a>

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
                            <li><a href="#tab-3">Reviews ()</a></li>
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
                                    
                                                        
                                                        </ul>
                                                    </li>
                                                    <li class="v_centered">
                                                        <span class="name">Quality</span>
                                                        <ul class="rating">
                                                       
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="review-body">
                                                    <div class="review-meta">
                                                        <h5 class="bold"></h5>
                                                        Review by <a href="#" class="bold"></a> on 
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                    @endforeach
                                    <!-- <a href="#" class="button_grey middle_btn">Show All</a> -->
                                </section>
                            </div>

                        </div>


                    </div>

                </div>


                <section class="section_offset">

                    <h3 class="offset_title">Related Products</h3>

                    <div class="owl_carousel related_products">


                 
                        <div class="product_item">


                            <div class="image_wrap">

                            


                                <div class="actions_wrap">

                                    <div class="centered_buttons">

                                        <a href="#" class="button_dark_grey quick_view" data-modal-url="/quick-view/">Quick View</a>

                                        <!-- <a href="#" class="button_blue add_to_cart">Add to Cart</a> -->

                                    </div>

                                    <a href="/add-wishlist/" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                    <a href="/compare-product/" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                </div>

                            </div>

                            <div class="label_new">New</div>


                            <div class="description">

                                <a href="/product-view/"></a>

                                <div class="clearfix product_info">

                                    <p class="product_price alignleft"><b>AED</b></p>

                                </div>

                            </div>


                        </div>
                   
                    </div><!--/ .owl_carousel -->

                </section><!--/ .section_offset -->

                <!-- - - - - - - - - - - - - - End of related products - - - - - - - - - - - - - - - - -->


            </main><!--/ [col]-->

            <aside class="col-md-3 col-sm-4">

                <!-- - - - - - - - - - - - - - Seller Information - - - - - - - - - - - - - - - - -->

                <section class="section_offset">

                </section>


           
                <section class="section_offset">
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
                                        <p class="product_price alignleft"><b>AED</b></p>
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

                                        <p class="product_price alignleft"><b>AED5.99</b></p>

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

                                        <p class="product_price alignleft"><b>AED8.99</b></p>

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

                                        <p class="product_price alignleft"><b>AED76.99</b></p>

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

                </section>
             

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

                                    <p class="product_price alignleft"><b>AED5.99</b></p>

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

                                    <p class="product_price alignleft"><s>AED19.99</s> <b>AED13.99</b></p>

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
@endsection