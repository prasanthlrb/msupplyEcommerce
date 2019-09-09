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
		
														<a href="javascript:void(null)" onclick="addWishlist({{$row->id}})" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
		
														<a href="javascript:void(null)" onclick="addCompare({{$row->id}})" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
		
													</div><!--/ .actions_wrap-->
													
													<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->
		
												</div><!--/. image_wrap-->
		
												<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->
		
												<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->
												@if($row->regular_price != null && $row->category != 7)

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
		
													
													@if($row->category != 7)
													<div class="clearfix product_info">
		
														<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->
		
														<?php 
														$getRating = App\rating::where('item_id',$row->id)->get();
														if(count($getRating) > 0){
															$rating_count;
														
														   
														$total=0;
														foreach($getRating as $rows){
															$total +=$rows->rating;
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
		
														<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->
		
							
												
							
														<p class="product_price alignleft">
																@if($row->regular_price != null)
															<s>₹ {{$row->regular_price}}</s> 
															<b>₹ {{$row->sales_price}}</b></p>
															@else
															<b>₹ {{$row->sales_price}}</b></p>
																@endif
		
															</div>
															@endif
															<!--/ .clearfix.product_info-->

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
		
														<a href="/add-wishlist/{{$row->id}}" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>
		
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
		
														<?php 
														$getRating = App\rating::where('item_id',$product_today[0]->id)->get();
														if(count($getRating) > 0){
															$rating_count;
														
														   
														$total=0;
														foreach($getRating as $rows){
															$total +=$rows->rating;
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
		
										
		
										<!-- - - - - - - - - - - - - - End of view all deals of the day - - - - - - - - - - - - - - - - -->
		
									</section><!--/ .section_offset.animated.transparent-->
		
									<!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->
						@endif
								<section class="section_offset animated transparent" data-animation="fadeInDown">
						
									<h3>Categories</h3>
								
					
			
				
								
<div id='cssmenu'>
		<ul>
				<!-- First Menu start -->
				@foreach(App\category::with('childs')->where('parent_id',0)->get() as $item)
				@if($item->childs->count() > 0)
				<li class='active has-sub has-new-sub'><a href='/category/{{$item->id}}'><span>{{$item->category_name}}</span></a>
					<!-- second Menu start -->
					<ul class="first-child">
					@foreach($item->childs as $item2)
						@if($item2->childs->count() > 0)
						<li class='has-sub has-new-sub'><a href='/category/{{$item2->id}}'><span>{{$item2->category_name}}</span></a>
							<ul class="second-child">
							@foreach($item2->childs as $item3)
							@if($item3->childs->count() > 0)
							<li class="has-sub has-new-sub"><a href='/category/{{$item3->id}}'class='has-sub has-new-sub'><span>{{$item3->category_name}}</span></a>
								<ul class="second-child">
								@foreach($item3->childs as $item4)
								@if($item4->childs->count() > 0)
								<li class='has-sub has-new-sub'><a href='/category/{{$item4->id}}' class='has-sub has-new-sub'><span>{{$item4->category_name}}</span></a>
								@else
								<li class='last'><a href='/category/{{$item4->id}}'><span>{{$item4->category_name}}</span></a></li>
								@endif
								@endforeach
							</ul>
							</li>
							@else
							<li class='last'><a href='/category/{{$item3->id}}'><span>{{$item3->category_name}}</span></a></li>
							@endif
							@endforeach
						</ul>
							</li>
						@else
						<li class='last'><a href='/category/{{$item2->id}}'><span>{{$item2->category_name}}</span></a></li>
						@endif
						@endforeach
					</ul>
					<!-- second Menu end -->
				</li>
				@else
		<li><a href='/category/{{$item->id}}'><span>{{$item->category_name}}</span></a></li>
				@endif
		   
			 @endforeach
			 <!-- First Menu End -->
		</ul>
</li>
</div>
						
								</section><!--/ .animated.transparent-->
						
								<!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->
						
								<!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
						
								<div class="section_offset animated transparent" data-animation="fadeInDown" id="stricky-sideimg">
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

										<li><a href="#tiles-1">Floor Tiles</a></li>
										<li><a href="#tiles-2">Wall Tiles</a></li>
									

									</ul>
									
									<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

									<div class="tab_containers_wrap">

										<div id="tiles-1" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
												@foreach($floor as $row)
												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

													<img src="http://www.kagtech.net/KAGAPP/Partsupload/{{$row->product_image}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

															<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view-tiles/{{$row->product_id}}">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													{{-- <div class="label_new">New</div> --}}

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

													<a href="/product/{{$row->product_id}}">{{$row->product_name}}</a>

														<div class="clearfix product_info">

														<p class="product_price alignleft"><b>Rs : {{$row->sales_price}}</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>

														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														
														<a href="javascript:void(null)" onclick="addCompare({{$row->product_id}})" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></a>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div>
												@endforeach
												
												
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="/category/3" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-1-->

										<div id="tiles-2" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
													@foreach($wall as $row)
												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

													<img src="http://www.kagtech.net/KAGAPP/Partsupload/{{$row->product_image}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

															<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-view-tiles/{{$row->product_id}}">Quick View</a>

															</div><!--/ .centered_buttons -->

														</div><!--/ .actions_wrap-->
														
														<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

													</div><!--/. image_wrap-->

													<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

													{{-- <div class="label_new">New</div> --}}

													<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

													<div class="description">

														<a href="/product/{{$row->product_id}}">{{$row->product_name}}</a>

														<div class="clearfix product_info">

														<p class="product_price alignleft"><b>Rs : {{$row->sales_price}}</b></p>

														</div>

													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

													<div class="buttons_row">

														<button class="button_blue middle_btn">Add to Cart</button>

														<button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
														
													<a href="javascript:void(null)" onclick="addCompare({{$row->product_id}})" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></a>

													</div>

													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div>
												@endforeach
											</div><!--/ .sh_container-->

											<!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="/category/2" class="button_grey middle_btn">View All Products</a>

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

								<h3>Paints</h3>

								<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

								<div class="tabs type_2 products">

									<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

									<ul class="tabs_nav clearfix">

										<li><a href="#paint-1">Interior Wall Paints</a></li>
										<li><a href="#paint-2">Exterior Wall Paints</a></li>
										<li><a href="#paint-3">Wood  &amp; Metal Paints</a></li>
										{{-- <li><a href="#paint-4">Primers / Undercoats</a></li> --}}
									</ul>
									
									<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

									<div class="tab_containers_wrap">

										<div id="paint-1" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->
												@foreach($paint->where('sub_category',22) as $item)
												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('/product_img/'.$item->product_image)}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-model-paint/{{$item->id}}">Quick View</a>

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

													<a href="/product/{{$item->id}}">{{$item->product_name}}</a>

														
													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->


													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												@endforeach
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

												
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="/category/22" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-6-->

										<div id="paint-2" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
												@foreach($paint->where('sub_category',23) as $item)
												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('/product_img/'.$item->product_image)}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-model-paint/{{$item->id}}">Quick View</a>

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

														<a href="/product/{{$item->id}}">{{$item->product_name}}</a>

														
													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->


													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												@endforeach
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->

											<!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="/category/23" class="button_grey middle_btn">View All Products</a>

											</footer>

											<!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

										</div><!--/ #tab-7-->

										<div id="paint-3" class="tab_container">

											<!-- - - - - - - - - - - - - - Carousel of hot products - - - - - - - - - - - - - - - - -->

											<div class="owl_carousel carousel_in_tabs">
												
													@foreach($paint->where('sub_category',24) as $item)
												<div class="product_item type_2">

													<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

													<div class="image_wrap">

														<img src="{{ asset('/product_img/'.$item->product_image)}}" alt="">

														<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

														<div class="actions_wrap">

															<div class="centered_buttons">

																<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="/quick-model-paint/{{$item->id}}">Quick View</a>

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

														<a href="/product/{{$item->id}}">{{$item->product_name}}</a>

														
													</div>

													<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

													<!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->


													<!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

												</div><!--/ .product_item-->
												@endforeach
												
												<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

											</div><!--/ .sh_container-->
											
											<!-- - - - - - - - - - - - - - End of carousel of hot products - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

											<footer class="bottom_box">

												<a href="/category/24" class="button_grey middle_btn">View All Products</a>

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

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.documentElement.scrollTop > 905 && document.documentElement.scrollTop < 2900) {
	$('#stricky-sideimg').addClass('fixedSideImage');
	  console.log(document.documentElement.scrollTop)
    // document.getElementById("stricky-sideimg").style.fontSize = "30px";
  } else {
	 $('#stricky-sideimg').removeClass('fixedSideImage');
// 	  console.log(document.documentElement.scrollTop)
//    document.getElementById("stricky-sideimg").style.fontSize = "90px";
  }
}
			</script>
			@endsection