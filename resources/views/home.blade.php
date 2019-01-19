@extends('layout.app')
@section('content')
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="page_wrapper">

				<div class="container">

					<div class="row">

						<!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

					@include('include.sidebar1')

						<!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Main slider - - - - - - - - - - - - - - - - -->

						<main class="col-md-9 col-sm-8">

							<div class="section_offset animated transparent" data-animation="fadeInDown">
							
								<!-- - - - - - - - - - - - - - Revolution slider - - - - - - - - - - - - - - - - -->

								<div class="revolution_slider">

									<div class="rev_slider">

										<ul>

											<!-- - - - - - - - - - - - - - Slide 1 - - - - - - - - - - - - - - - - -->

											<li data-transition="papercut" data-slotamount="7">
												
												<img src="images/home_slide_4.jpg" alt="">

												<div class="caption sfl stl layer_1" data-x="left" data-hoffset="60" data-y="90" data-easing="easeOutBack" data-speed="600" data-start="900">Best Quality</div>

												<div class="caption sfl stl layer_2" data-x="left" data-y="138" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1000">Materials</div>

												<div class="caption sfl stl layer_3" data-x="left" data-y="190" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">at Low Prices</div>

												<div class="caption sfb stb" data-x="left" data-y="245" data-hoffset="60" data-easing="easeOutBack" data-speed="700" data-start="1100">
													<a href="#" class="button_blue big_btn">Shop Now!</a>
												</div>

											</li>

											<!-- - - - - - - - - - - - - - End of Slide 1 - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Slide 2 - - - - - - - - - - - - - - - - -->

											<li data-transition="papercut" data-slotamount="7" class="align_center">
												
												<img src="images/home_slide_5.jpg" alt="">

												<div class="caption sfl stl layer_5" data-x="center" data-y="77" data-easing="easeOutBack" data-speed="600" data-start="900">Have A Question?</div>

												<div class="caption sfl stl layer_6" data-x="center" data-y="135" data-easing="easeOutBack" data-speed="600" data-start="1050"><small>Our</small> Engineers<br><small>Are</small> Ready <small>to</small> Help You!</div>

												<div class="caption sfb stb" data-x="center" data-y="260" data-easing="easeOutBack" data-speed="700" data-start="1150">
													<a href="#" class="button_blue big_btn">Contact Us Now!</a>
												</div>

											</li>

											<!-- - - - - - - - - - - - - - End of Slide 2 - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Slide 3 - - - - - - - - - - - - - - - - -->

											<li data-transition="papercut" data-slotamount="7">
												
												<img src="images/home_slide_6.jpg" alt="">

												<div class="caption sfl stl layer_1" data-x="right" data-y="73" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="900">Get 10% Off</div>

												<div class="caption sfl stl layer_2" data-x="right" data-y="122" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="1000">For Reorders</div>

												<div class="caption sfl stl layer_2" data-x="right" data-y="178" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="1100">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus.</div>

												<div class="caption sfb stb" data-x="right" data-hoffset="-60" data-y="262" data-easing="easeOutBack" data-speed="700" data-start="1150">
													<a href="#" class="button_blue big_btn">Read More</a>
												</div>

											</li>

											<!-- - - - - - - - - - - - - - End of Slide 3 - - - - - - - - - - - - - - - - -->

										</ul>

									</div><!--/ .rev_slider-->

								</div><!--/ .revolution_slider-->
								
								<!-- - - - - - - - - - - - - - End of Revolution slider - - - - - - - - - - - - - - - - -->

							</div><!--/ .section_offset -->

							<!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

							<div class="section_offset">

								<div class="row">

									<div class="col-sm-6">
										
										<a href="#" class="banner animated transparent" data-animation="fadeInDown">
										
											<img src="images/banner_img_1.jpg" alt="">

										</a>

									</div><!--/ [col]-->

									<div class="col-sm-6">
										
										<a href="#" class="banner animated transparent" data-animation="fadeInDown" data-animation-delay="150">
										
											<img src="images/banner_img_2.jpg" alt="">

										</a>

									</div><!--/ [col]-->

								</div><!--/ .row-->

							</div><!--/ .section_offset-->

							<!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Medicine & Health - - - - - - - - - - - - - - - - -->

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