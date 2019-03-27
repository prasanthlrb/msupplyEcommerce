@extends('layout.app')
@section('content')
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

<div class="secondary_page_wrapper">

    <div class="container">

        <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

        <ul class="breadcrumbs">
            <li><a href="/">Home</a></li>
           
        </ul>

        <div class="row">

            <aside class="col-md-3 col-sm-4 has_mega_menu">

                <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

                <section class="section_offset">

                    <h3>Categories</h3>
						
								
                    <div id='cssmenu'>
                        <ul>
                           <li><a href='#'><span>Home</span></a></li>
                           <li class='active has-sub has-new-sub'><a href='#'><span>Products</span></a>
                              <ul class="first-child"><!-- over all child bro -->
                                 <li class='has-sub has-new-sub'><a href='#'><span>Product 1</span></a>
                                    <ul class="second-child">
                                       <li class="has-sub has-new-sub"><a href='#'class='has-sub has-new-sub'><span>Sub Product</span></a>
                                             <ul class="second-child">
                                                <li><a href='#'><span>Sub Product</span></a></li>
                                                <li class='has-sub has-new-sub'><a href='#' class='has-sub has-new-sub'><span>Sub Product</span></a>
                                                    <ul class="second-child">
                                                            <li class='has-sub has-new-sub'><a href='#' class='has-sub has-new-sub'><span>Sub Product</span></a>
                                                                <ul class="second-child">
                                                                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                                                                    </ul>	
                                                            </li>
                                                    </ul>
                                                </li>
                                                <li class='last'><a href='#'><span>Sub Product</span></a></li>
                                                <li class='last'><a href='#'><span>Sub Product</span></a></li>
                                                <li class='last'><a href='#'><span>Sub Product</span></a></li>                                               
                                             </ul><!-- inner product menu -->
                                       </li>
                                       <li class='last'><a href='#'><span>Sub Product</span></a></li>
                                    </ul>
                                 </li><!-- 2nd level menu end here -->
                                 <li class='has-sub has-new-sub'><a href='#'><span>Product 2</span></a>
                                    <ul class="second-child">
                                       <li><a href='#'><span>Sub Product</span></a></li>
                                       <li class='last'><a href='#'><span>Sub Product</span></a></li>
                                    </ul>
                                 </li>
                                 <li><a href='#'><span>Product 3</span></a></li>
                              </ul>
                           </li>
                           <li><a href='#'><span>About</span></a></li>
                           <li class='last'><a href='#'><span>Contact</span></a></li>
                        </ul>
                        </div>
                </section><!--/ .animated.transparent-->

                <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->
               
               

                <!-- - - - - - - - - - - - - - Tags - - - - - - - - - - - - - - - - -->

                <section class="section_offset">

                    <h3>Brand</h3>

                    <div class="tags_container">
                            <ul class="tags_cloud">
                                @foreach($brand as $brand1)    
                                    <li><a href="/filter-brand/{{$brand1->id}}" class="button_grey">{{$brand1->brand}}</a></li>
                                @endforeach
                                </ul>
                       
                        
                    </div>

                </section>

            

                <!-- - - - - - - - - - - - - - End of tags - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                <div class="section_offset">
						
                    <a href="{{$adModel[2]->url}}">
                        
                    <img src="/ads/{{$adModel[2]->ad_name}}" alt="">
        
                    </a>
        
                </div>
                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                 <!-- - - - - - - - - - - - - - Filter - - - - - - - - - - - - - - - - -->



                 <section class="section_offset">

                    <h3>Already Viewed Products</h3>

                    <ul class="products_list_widget">

                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                        <li>
                            
                            <a href="#" class="product_thumb">
                                
                                <img src="images/product_thumb_4.jpg" alt="">

                            </a>

                            <div class="wrapper">

                                <a href="#" class="product_title">Aenean auctor wisi et urna...</a>

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

                    </ul><!--/ .list_of_products-->

                </section>

                <!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->


            </aside>

            <main class="col-md-9 col-sm-8">

                <!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->

               

                <!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->

                <section class="section_offset">
              

                </section>

                <!-- - - - - - - - - - - - - - Products - - - - - - - - - - - - - - - - -->

                <div class="section_offset">
                    <div class="section_offset">

                        <div class="row">

                            <div class="col-sm-6">
                                
                                <a href="{{$adModel[0]->url}}" class="banner animated transparent" data-animation="fadeInDown">
                                
                                    <img src="/ads/{{$adModel[0]->ad_name}}" alt="">

                                </a>

                            </div><!--/ [col]-->

                            <div class="col-sm-6">
                                
                                <a href="{{$adModel[1]->url}}" class="banner animated transparent" data-animation="fadeInDown" data-animation-delay="150">
                                
                                    <img src="/ads/{{$adModel[1]->ad_name}}" alt="">

                                </a>

                            </div><!--/ [col]-->

                        </div><!--/ .row-->

                    </div><!--/ .section_offset-->
                    <header class="top_box on_the_sides">

                        <div class="left_side clearfix v_centered">

                            <!-- - - - - - - - - - - - - - Sort by - - - - - - - - - - - - - - - - -->

                            <div class="v_centered">

                                <span>Sort by:</span>

                                <div class="custom_select sort_select">
                                    
                                    <select name="">
                                            
                                        <option value="Default">Default</option>
                                        <option value="Price">Price</option>
                                        <option value="Name">Name</option>
                                        <option value="Date">Date</option>

                                    </select>

                                </div>

                            </div>

                            <!-- - - - - - - - - - - - - - End of sort by - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Number of products shown - - - - - - - - - - - - - - - - -->

                            <div class="v_centered">

                                <span>Show:</span>

                                <div class="custom_select">

                                    <select name="">

                                        <option value="15">15</option>
                                        <option value="12">12</option>
                                        <option value="9">9</option>
                                        <option value="6">6</option>
                                        <option value="3">3</option>

                                    </select>

                                </div>

                            </div>

                            <!-- - - - - - - - - - - - - - End of number of products shown - - - - - - - - - - - - - - - - -->

                        </div>

                        <div class="right_side">

                            <!-- - - - - - - - - - - - - - Product layout type - - - - - - - - - - - - - - - - -->

                            <div class="layout_type buttons_row" data-table-container="#products_container">

                                <a href="#" data-table-layout="grid_view" class="button_grey middle_btn icon_btn active tooltip_container"><i class="icon-th"></i><span class="tooltip top">Grid View</span></a>

                                <a href="#" data-table-layout="list_view list_view_products" class="button_grey middle_btn icon_btn tooltip_container"><i class="icon-th-list"></i><span class="tooltip top">List View</span></a>

                            </div>

                            <!-- - - - - - - - - - - - - - End of product layout type - - - - - - - - - - - - - - - - -->

                        </div>

                    </header>
                    
                    <div class="table_layout" id="products_container">

                                <?php $i = 0;
                                foreach($product as $key => $product1){
                                  if($i%3 == 0) {
                                    echo $i > 0 ? "</div>" : ""; 
                                        echo "<div class='table_row'>";
                                    }
                                  ?>

                            <div class="table_cell">

                                <div class="product_item">

                                    <div class="image_wrap">

                                        <?php if($product1->product_image != ""){ ?>
	                                        <img style="width:200px" src="{{asset('product_img/').'/'.$product1->product_image}}" alt="">
                                        <?php } else{ ?>
	                                        <img style="width:200px" src="../../images/product_img_7.jpg" alt="">
                                        <?php } ?>                             

                                        <div class="actions_wrap">

                                            <div class="centered_buttons">

                                                <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view/{{$product1->id}}">Quick View</a>

                                                <!-- <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a> -->
                                                <!-- <button onclick="addCart({{$product1->id}})" class="button_blue middle_btn add_to_cart">Add to Cart</button> -->

                                            </div>

                                            <a href="/add-wishlist/{{$product1->id}}" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                            <a href="/compare-product/{{$product1->id}}" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                        </div>

                                    </div>

                                    <div class="description">

                                        <a href="/product-view/{{$product1->id}}">{{$product1->product_name}}</a>

                                        <div class="clearfix product_info">

                                            <p class="product_price alignleft"><b>AED{{$product1->sales_price}}</b></p>

                                            <!-- <ul class="rating alignright">

                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li></li>

                                            </ul> -->

                                        </div>

                                    </div>

                                    <div class="full_description">

                                        <a class="product_title" href="/product-view/{{$product1->id}}">{{$product1->product_name}}</a>

                                        <a href="/filter-product/{{$product1->category}}" class="product_category">
                                            
                                        </a>

                                        <!-- <div class="v_centered product_reviews">
                                        
                                            <ul class="rating">

                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li></li>

                                            </ul>

                                            <ul class="topbar">

                                                <li><a href="#">3 Review(s)</a></li>
                                                <li><a href="#">Add Your Review</a></li>

                                            </ul>

                                        </div> -->

                                        <div><?php echo $product1->product_description;?></div>

                                        <!-- <a href="#" class="learn_more">Learn More</a> -->

                                    </div>

                                    <div class="actions">

                                        <p class="product_price bold">AED{{$product1->sales_price}}</p>

                                        <ul class="seller_stats">

                                            <li>Shipping: 
                                                @if($product1->shipping_type == 1)
                                                <span class="success">Free Shipping</span>
                                                @else
                                                <span class="success">Paid Shipping</span>
                                                @endif
                                            </li>
                                            @if($product1->stock_quantity != "")
                                            <li>Availability: <span class="success">in stock</span></li>
                                            @else
                                            <li>Availability: <span class="danger">No Stock Available</span></li>
                                            @endif
                                          

                                        </ul>

                                        <ul class="buttons_col">

                                            <!-- <li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li> -->

                                            <li><a href="/add-wishlist/{{$product1->id}}" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

                                            <li><a href="/compare-product/{{$product1->id}}" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

                                        </ul>

                                    </div>


                                </div>

                            </div>


<?php $i++; } ?>




</div>


                        


                    </div><!--/ .table_layout -->

                    <footer class="bottom_box on_the_sides">

                        <div class="left_side">

                            <!-- <p>Showing 1 to 3 of 45 (15 Pages)</p> -->

                        </div>

                        <div class="right_side">
                        
                            <!-- <ul class="pags">

                                <li><a href="#"></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"></a></li>

                            </ul> -->
@if ($product->lastPage() > 1)
<ul class="pags">
    <li class="{{ ($product->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $product->url(1) }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $product->lastPage(); $i++)
        <li class="{{ ($product->currentPage() == $i) ? ' active' : '' }}">
            <a href="{{ $product->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="{{ ($product->currentPage() == $product->lastPage()) ? ' disabled' : '' }}">
        <a href="{{ $product->url($product->currentPage()+1) }}" >Next</a>
    </li>
</ul>
@endif
                        </div>

                    </footer>

                </div>

                <!-- - - - - - - - - - - - - - End of products - - - - - - - - - - - - - - - - -->

            </main>

        </div><!--/ .row -->

    </div><!--/ .container-->

</div><!--/ .page_wrapper-->

<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
@endsection
@section('extra-js')
<script>
    function routeCat(id){
        window.location.href="/filter-product/"+id;
    }

</script>

@endsection