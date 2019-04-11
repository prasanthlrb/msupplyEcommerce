@extends('layout.app')
@section('content')
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="page_wrapper">

				<div class="container">

					<div class="row">

						<!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->
						<aside class="col-md-3 col-sm-4 has_mega_menu">

							
								<!-- - - - - - - - - - - - - - Todays deals - - - - - - - - - - - - - - - - -->
								@if(count($product_today) > 0)
								<section class="section_offset animated transparent" data-animation="fadeInDown">

										<h3 class="widget_title">Today's Deals</h3>
		
										<!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->
									@if(count($product_today) >1)
										<div class="owl_carousel widgets_carousel">
												
											
		
											<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
		
											@foreach($product_today as $row)
											<div class="product_item">
		
												<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
		
												<div class="image_wrap">
		
													<img src="product_img/{{$row->product_image}}" alt="">
		
													<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
		
													<div class="actions_wrap">
		
														<div class="centered_buttons">
		
															<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view/{{$row->id}}">Quick View</a>
		
														
		
														</div><!--/ .centered_buttons -->
		
														<a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
		
														<a href="javascript:void(null)" onclick="addCompare({{$row->id}})" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
		
													</div><!--/ .actions_wrap-->
													
													<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
		
												</div><!--/. image_wrap-->
		
												<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
		
												<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
												@if($row->regular_price != null)

												<div class="label_offer percentage">
													<?php $v1 = $row->regular_price - $row->sales_price;
													$v2 = ceil($v1/$row->regular_price*100); ?>
													<div>{{$v2}}%</div>OFF
		
												</div>
												@endif
												<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
		
												<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->
												
												<div class="description">
														<p><a href="/product/{{$row->id}}">{{$row->product_name}}</a></p>
		
													
		
													<div class="clearfix product_info">
		
														<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
		
														<ul class="rating alignright">
		
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li></li>
		
														</ul>
		
														<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
		
							
												
							
														<p class="product_price alignleft">
																@if($row->regular_price != null)
															<s>₹ {{$row->regular_price}}</s> 
															<b>₹ {{$row->sales_price}}</b></p>
															@else
															<b>₹ {{$row->sales_price}}</b></p>
																@endif
		
															</div><!--/ .clearfix.product_info-->

														</div>
												<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->
		
											</div><!--/ .product_item-->
											@endforeach
											
											<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
		
									
		
										</div><!--/ .widgets_carousel-->
										@else
										<div class="product_item">
		
												<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
												
												<div class="image_wrap">
		
														<img src="product_img/{{$product_today[0]->product_image}}" alt="">
		
													<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
		
													<div class="actions_wrap">
		
														<div class="centered_buttons">
		
														<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view/{{$product_today[0]->id}}">Quick View</a>
		
														
		
														</div><!--/ .centered_buttons -->
		
														<a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
		
														<a href="javascript:void(null)" onclick="addCompare({{$product_today[0]->id}})" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
		
													</div><!--/ .actions_wrap-->
													
													<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
		
												</div><!--/. image_wrap-->
		
												<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
		
												<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
		
												<div class="label_offer percentage">
		
													<div>25%</div>OFF
		
												</div>
		
												<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->
		
												<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->
		
												<div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>
		
												<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->
		
												<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->
		
												<div class="description">
		
														<p><a href="product/{{$product_today[0]->id}}">{{$product_today[0]->product_name}}</a></p>
		
													<div class="clearfix product_info">
		
														<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
		
														<ul class="rating alignright">
		
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
															<li class="active"></li>
		
														</ul>
		
														<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
		
														<p class="product_price alignleft">
																@if($product_today[0]->sales_price != null)
															<s>₹ {{$product_today[0]->regular_price}}</s> 
															<b>₹ {{$product_today[0]->sales_price}}</b></p>
															@else
															<b>₹ {{$product_today[0]->regular_price}}</b></p>
																@endif
		
													</div><!--/ .clearfix.product_info-->
		
												</div>
		
												<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->
		
											</div><!--/ .product_item-->
										@endif
										<!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->
		
										<!-- - - - - - - - - - - - - - View all deals of the day - - - - - - - - - - - - - - - - -->
		
										<footer class="bottom_box">
		
											<a href="#" class="button_grey middle_btn">View All Deals</a>
		
										</footer>
		
										<!-- - - - - - - - - - - - - - End of view all deals of the day - - - - - - - - - - - - - - - - -->
		
									</section><!--/ .section_offset.animated.transparent-->
		
									<!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->
						@endif
								<section class="section_offset animated transparent" data-animation="fadeInDown">
						
									<h3>Categories</h3>
									<?php 
									 $category = App\categories::with('childs')
       ->where('parent_id',0)
	   ->get(); 
	 print_r($category);  
	 
	   ?>
						
								
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
						
								<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
						
								<div class="section_offset animated transparent" data-animation="fadeInDown">
						<?php if(count($adModel) > 0){?>
									<a href="{{$adModel[2]->url}}">
										
									<img src="ads/{{$adModel[2]->ad_name}}" alt="">
						
									</a>
								<?php } ?>
								</div>
						
								<!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
						
							</aside><!--/ [col]-->

						<!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Main slider - - - - - - - - - - - - - - - - -->

						<main class="col-md-9 col-sm-8">

							<div class="section_offset animated transparent" data-animation="fadeInDown">
							
								<!-- - - - - - - - - - - - - - Revolution slider - - - - - - - - - - - - - - - - -->

								<div class="revolution_slider">

									<div class="rev_slider">

										<ul>
											<?php if(isset($slider)){?>
											<!-- - - - - - - - - - - - - - Slide  - - - - - - - - - - - - - - - - -->
											@foreach($slider as $row)
											<li data-transition="papercut" data-slotamount="7">
												
												<img src="slider/{{$row->slider_image}}" alt="">

											<div style="color:<?php echo $row->title_color != null ?  $row->title_color : '' ?>" class="caption sfl stl <?php echo $row->slider_position == 'center' ? 'layer_3' : 'layer_1' ?> " data-x="{{$row->slider_position}}" data-hoffset="<?php echo $row->slider_position == 'right' ? '-60' : '60' ?>" data-y="<?php echo $row->title_y != null ?  $row->title_y : '90' ?>" data-easing="easeOutBack" data-speed="600" data-start="900"><?php echo $row->title?></div>

												<div style="color:<?php echo $row->sub_color != null ?  $row->sub_color : '' ?>" class="caption sfl stl <?php echo $row->slider_position == 'center' ? 'layer_6' : 'layer_2' ?>" data-x="{{$row->slider_position}}" data-y="<?php echo $row->sub_y != null ?  $row->sub_y : '138' ?>" data-hoffset="<?php echo $row->slider_position == 'right' ? '-60' : '60' ?>" data-easing="easeOutBack" data-speed="600" data-start="1000"><?php echo $row->sub_title?></div>

												<div style="color:<?php echo $row->desc_color != null ?  $row->desc_color : '' ?>" class="caption sfl stl layer_3" data-x="{{$row->slider_position}}" data-y="<?php echo $row->desc_y != null ?  $row->desc_y : '190' ?>" data-hoffset="<?php echo $row->slider_position == 'right' ? '-60' : '60' ?>" data-easing="easeOutBack" data-speed="600" data-start="1100"><?php echo $row->desc ?></div>

												<div style="color:<?php echo $row->button_color != null ?  $row->button_color : '' ?>" class="caption sfb stb" data-x="{{$row->slider_position}}" data-y="<?php echo $row->button_y != null ?  $row->button_y : '245' ?>" data-hoffset="<?php echo $row->slider_position == 'right' ? '-60' : '60' ?>" data-easing="easeOutBack" data-speed="700" data-start="1100">
													<a href="{{$row->button_url}}" class="button_blue big_btn">{{$row->button_text}}</a>
												</div>

											</li>
											@endforeach
										<?php } ?>
										</ul>

									</div><!--/ .rev_slider-->

								</div><!--/ .revolution_slider-->
								
								<!-- - - - - - - - - - - - - - End of Revolution slider - - - - - - - - - - - - - - - - -->

							</div><!--/ .section_offset -->

							<!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

							<div class="section_offset">

								<div class="row">
									@if(count($adModel) > 0)
									<div class="col-sm-6">
										
										<a href="{{$adModel[0]->url}}" class="banner animated transparent" data-animation="fadeInDown">
										
											<img src="ads/{{$adModel[0]->ad_name}}" alt="">

										</a>

									</div><!--/ [col]-->

									<div class="col-sm-6">
										
										<a href="{{$adModel[1]->url}}" class="banner animated transparent" data-animation="fadeInDown" data-animation-delay="150">
										
											<img src="ads/{{$adModel[1]->ad_name}}" alt="">

										</a>

									</div><!--/ [col]-->
									@endif
								</div><!--/ .row-->

							</div><!--/ .section_offset-->

							<!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->
							<?php echo $output ?>

							<section class="section_offset animated transparent" data-animation="fadeInDown">

								<h3>Tiles</h3>

								<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

								<div class="tabs type_2 products">

									<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

									<ul class="tabs_nav clearfix">

										<li><a href="#tab-1">Wall Tiles</a></li>
										<li><a href="#tab-2">Floor Tiles</a></li>
										<li><a href="#tab-3">Elevation Tiles</a></li>
										<li><a href="#tab-4">Kitchen Tiles</a></li>
										<li><a href="#tab-5">Parking Tiles</a></li>

									</ul>
									
									<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

									<div class="tab_containers_wrap">

										<div id="tab-1" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/1.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">SILVER LACE - L, 24x12 Digital Glossy L/D HL</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>

														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/2.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">SILVER LACE - D, 24x12 Digital Glossy L/D HL</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/3.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">MOTO HL, 24x12 Digital Glossy L/D HL</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/4.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">JULIANA HL, 24x12 Digital Glossy L/D HL</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-1-->

										<div id="tab-2" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/1.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Aenean Auctor Wisi Et Urna 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/2.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Aenean Auctor Wisi Et Urna 30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/3.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Amet Consectetuer Adipiscing 15, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/4.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ut Tellus Dolor Dapibus Eget 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->

											<!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-2-->

										<div id="tab-3" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of hot products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/5.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/4.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Mauris Fermentum Dictum Magna 30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/3.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/2.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 180</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of hot products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-3-->

										<div id="tab-4" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of top rated products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/5.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 100 af</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/4.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Aenean Auctor Wisi Et Urna 30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/3.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/2.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Nemo Enim Ipsam Voluptatem 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of top rated products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-4-->

										<div id="tab-5" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of sale products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/1.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Nemo Enim Ipsam Voluptatem 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/2.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Nemo Enim Ipsam Voluptatem Quia 30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/3.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/wall/4.jpeg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Dolor Sit Amet Consectetuer 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of sale products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-5-->

									</div>

									<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

								</div><!--/ .tabs.section_offset-->
								
								<!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

							</section><!--/ .section_offset -->

							<!-- - - - - - - - - - - - - - End of Medicine & Health - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Beauty - - - - - - - - - - - - - - - - -->

							<section class="section_offset animated transparent" data-animation="fadeInDown">

								<h3 class="offset_title">Bathrooms</h3>

								<!-- - - - - - - - - - - - - - Carousel of beauty products - - - - - - - - - - - - - - - - -->

								<div class="owl_carousel carousel_in_tabs">
									
									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item type_2">

										<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

										<div class="image_wrap">

											<img src="{{ asset('images/bathrooms/1.jpeg')}}" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

												</div><!--/ .centered_buttons -->

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

										<div class="description">

											<a href="#">EVOVETA - WALL HUNG</a>

											<div class="clearfix product_info">

												<p class="product_price alignleft"><b>$5.99</b></p>

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

										<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

										<div class="buttons_row">

											<button class="button_blue middle_btn">Add to Cart</button>
											<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
											<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

										</div>

										<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item type_2">

										<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

										<div class="image_wrap">

											<img src="{{ asset('images/bathrooms/2.jpeg')}}" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

												</div><!--/ .centered_buttons -->

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

										<div class="label_bestseller">Bestseller</div>

										<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

										<div class="description">

											<a href="#">BONBINO
												470 X 374 X 210, Wash Basin & Pedestal</a>

											<div class="clearfix product_info">

												<p class="product_price alignleft"><b>$8.99</b></p>

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

										<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

										<div class="buttons_row">

											<button class="button_blue middle_btn">Add to Cart</button>
											<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
											<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

										</div>

										<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item type_2">

										<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

										<div class="image_wrap">

											<img src="{{ asset('images/bathrooms/4.jpeg')}}" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

												</div><!--/ .centered_buttons -->

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

										<div class="description">

											<a href="#">Pan & Urinal Set</a>

											<div class="clearfix product_info">

												<p class="product_price alignleft"><b>$76.99</b></p>

											</div>

										</div>

										<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

										<div class="buttons_row">

											<button class="button_blue middle_btn">Add to Cart</button>
											<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
											<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

										</div>

										<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

									<div class="product_item type_2">

										<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

										<div class="image_wrap">

											<img src="{{ asset('images/bathrooms/3.jpeg')}}" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

												</div><!--/ .centered_buttons -->

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

										<div class="label_new">New</div>

										<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

										<div class="description">

											<a href="#">SLICE
												350 X 355 X 280, One Piece Wash Basin</a>

											<div class="clearfix product_info">

												<p class="product_price alignleft"><b>$44.99</b></p>

											</div>

										</div>

										<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

										<div class="buttons_row">

											<button class="button_blue middle_btn">Add to Cart</button>
											<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
											<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

										</div>

										<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									
									<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

								</div><!--/ .sh_container-->
								
								<!-- - - - - - - - - - - - - - End of carousel of beauty products - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

								<footer class="bottom_box">

									<a href="#" class="button_grey middle_btn">View All Products</a>

								</footer>

								<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

							</section><!--/ .section_offset -->

							<!-- - - - - - - - - - - - - - End of Beauty - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Personal Care - - - - - - - - - - - - - - - - -->

							<section class="section_offset animated transparent" data-animation="fadeInDown">

								<h3>Construction Materials</h3>

								<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

								<div class="tabs type_2 products">

									<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

									<ul class="tabs_nav clearfix">

										<li><a href="#tab-6">Cement</a></li>
										<li><a href="#tab-7">Bricks</a></li>
										<li><a href="#tab-8">Steel</a></li>
										<li><a href="#tab-9">Sand</a></li>
					

									</ul>
									
									<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

									<div class="tab_containers_wrap">

										<div id="tab-6" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/con_material/1.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Nam Elit Agna Endrerit Sit Amet 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/con_material/2.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Nemo Enim Ipsam Voluptatem, Caramel Chocolate Crunch 5 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$9.59</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/con_material/3.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Nemo Enim Ipsam Voluptatem, Lemon 4 fl oz (120ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$8.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/con_material/1.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-6-->

										<div id="tab-7" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Aenean Auctor Wisi Et Urna 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_2.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Aenean Auctor Wisi Et Urna 30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_3.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 15, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->

											<!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-7-->

										<div id="tab-8" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of hot products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_4.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_3.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ut Tellus Dolor Dapibus Eget 30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_5.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing 15, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Mauris Fermentum Dictum Magna Lorem 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of hot products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-8-->

										<div id="tab-9" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of top rated products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_5.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">NMauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_3.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 30, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ut Tellus Dolor Dapibus Eget Lorem 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of top rated products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-9-->

										<div id="tab-10" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of sale products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_2.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ut Tellus Dolor Dapibus Eget 30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_3.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_4.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Dolor Sit Amet Consectetuer Adipiscing 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of sale products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-10-->

										<div id="tab-11" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ipsum Dolor Sit Amet Consectetuer Adipiscing 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_2.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Dolor Sit Amet Consectetuer Adipiscing  30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_3.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing 15, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ipsum Dolor Sit Amet Consectetuer 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->

											<!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-11-->

										<div id="tab-12" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of top rated products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_5.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Adipiscing 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_3.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Dolor Sit Amet Consectetuer Adipiscing  30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ipsum Dolor Consectetuer Adipiscing 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of top rated products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-12-->

									</div>

									<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

								</div><!--/ .tabs.section_offset-->
								
								<!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

							</section><!--/ .section_offset -->

							<!-- - - - - - - - - - - - - - End of Personal Care - - - - - - - - - - - - - - - - -->
							<!-- - - - - - - - - - - - - - Personal Care - - - - - - - - - - - - - - - - -->

							<section class="section_offset animated transparent" data-animation="fadeInDown">

								<h3>Paints</h3>

								<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

								<div class="tabs type_2 products">

									<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

									<ul class="tabs_nav clearfix">

										<li><a href="#tab-6">Interior Wall Paints</a></li>
										<li><a href="#tab-7">Exterior Wall Paints</a></li>
										<li><a href="#tab-8">Wood  &amp; Metal Paints</a></li>
						
										<li><a href="#tab-11">Primers / Undercoats</a></li>
									</ul>
									
									<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

									<div class="tab_containers_wrap">

										<div id="tab-6" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/1.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">ODOUR-LESS AIRCARE</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/2.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Nemo Enim Ipsam Voluptatem, Caramel Chocolate Crunch 5 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$9.59</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/3.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Nemo Enim Ipsam Voluptatem, Lemon 4 fl oz (120ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$8.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/4.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-6-->

										<div id="tab-7" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/4.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Aenean Auctor Wisi Et Urna 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/3.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Aenean Auctor Wisi Et Urna 30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/4.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 15, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/4.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->

											<!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-7-->

										<div id="tab-8" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of hot products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/1.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/2.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ut Tellus Dolor Dapibus Eget 30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/3.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing 15, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/3.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Mauris Fermentum Dictum Magna Lorem 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of hot products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-8-->

										<div id="tab-9" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of top rated products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/4.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">NMauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/1.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/2.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 30, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/4.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ut Tellus Dolor Dapibus Eget Lorem 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of top rated products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-9-->

										<div id="tab-10" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of sale products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/4.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/1.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ut Tellus Dolor Dapibus Eget 30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/2.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('images/paint/3.jpg')}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Dolor Sit Amet Consectetuer Adipiscing 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of sale products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-10-->

										<div id="tab-11" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ipsum Dolor Sit Amet Consectetuer Adipiscing 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_2.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Dolor Sit Amet Consectetuer Adipiscing  30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_3.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing 15, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ipsum Dolor Sit Amet Consectetuer 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->

											<!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-11-->

										<div id="tab-12" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of top rated products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_5.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Adipiscing 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_3.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Dolor Sit Amet Consectetuer Adipiscing  30</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

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

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/deals_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_hot">Hot</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing, middle_btn 2.5 fl oz (75ml)</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="images/tabs_img_1.jpg" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - -  - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													<div class="label_new">New</div>

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="#">Ipsum Dolor Consectetuer Adipiscing 750mg, Softgels 120 ea</a>

														<div class="clearfix product_info">

															<p class="product_price alignleft"><b>$44.99</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														<button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of top rated products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="#" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-12-->

									</div>

									<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

								</div><!--/ .tabs.section_offset-->
								
								<!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

							</section><!--/ .section_offset -->

							<!-- - - - - - - - - - - - - - End of Personal Care - - - - - - - - - - - - - - - - -->

							
						</main><!--/ [col]-->
                
						<!-- - - - - - - - - - - - - - End of main slider - - - - - - - - - - - - - - - - -->

					</div><!--/ .row-->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
            <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
			@endsection
			
			@section('extra-js')
			<script>
			$('.home_menu').addClass('current');
			</script>
			@endsection