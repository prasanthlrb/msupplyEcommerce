<!doctype html>
<html lang="en">
	<head>
		<!-- Basic page needs
		============================================ -->
		<title>Msupply | Material-stores</title>
		<meta charset="utf-8">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">

		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="/images/fav_icon.png">

		<!-- Google web fonts
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!-- Libs CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('css/animate.css')}}">
		<link rel="stylesheet" href="{{ asset('css/fontello.css')}}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
		
		<!-- Theme CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('js/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{ asset('js/owlcarousel/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{ asset('js/arcticmodal/jquery.arcticmodal.css')}}">
		<link rel="stylesheet" href="{{ asset('css/style.css')}}">

		<!-- JS Libs
		============================================ -->
		<script src="{{ asset('js/modernizr.js')}}"></script>

		<!-- Old IE stylesheet
		============================================ -->
		<!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="{{ asset('css/oldie.css')}}">
        <![endif]-->
      
        @yield('extra-css')
	</head>
	<body class="front_page promo_popup">

		

		<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->

		<div class="wide_layout">

			<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

			<header id="header" class="type_6">

				<!-- - - - - - - - - - - - - - Top part - - - - - - - - - - - - - - - - -->

				<div class="top_part">

					<div class="container">

						<div class="row">

							<div class="col-lg-6 col-md-7 col-sm-8">

								<!-- - - - - - - - - - - - - - Login - - - - - - - - - - - - - - - - -->

								<p>Welcom visitor <a href="/login">Login</a> or <a href="/register">Register</a></p>

								<!-- - - - - - - - - - - - - - End login - - - - - - - - - - - - - - - - -->

							</div> <!--/ [col]-->

							<div class="col-lg-6 col-md-5 col-sm-4">

								<div class="clearfix">
                                    
									<!-- - - - - - - - - - - - - - Language change - - - - - - - - - - - - - - - - -->

									<div class="alignright site_settings">
                                            <img src="{{ asset('/images/android-app-alt.png')}}" alt="" width="71px">
                                            <img src="{{ asset('/images/app-store.png')}}" alt="" width="71px">
									
{{--                                         
										<ul class="dropdown site_setting_list language">

											<li class="animated_item"><a href="#"><img src="{{ asset('images/flag_en.jpg')}}" alt=""> English</a></li>
											<li class="animated_item"><a href="#"><img src="{{ asset('images/flag_g.jpg')}}" alt=""> German</a></li>
											<li class="animated_item"><a href="#"><img src="{{ asset('images/flag_s.jpg')}}" alt=""> Spanish</a></li>

										</ul>  --}}

									</div><!--/ .alignright.site_settings-->

									<!-- - - - - - - - - - - - - - End of language change - - - - - - - - - - - - - - - - -->
									
									<!-- - - - - - - - - - - - - - Currency change - - - - - - - - - - - - - - - - -->

									<div class="alignright site_settings currency">
                                            <p>App Available on </p>
										{{--  <span class="current open_">USD</span>

										<ul class="dropdown site_setting_list">

											<li class="animated_item"><a href="#">USD</a></li>
											<li class="animated_item"><a href="#">EUR</a></li>
											<li class="animated_item"><a href="#">GBP</a></li>

										</ul>  --}}

									</div><!--/ .alignright.site_settings.currency-->

									<!-- - - - - - - - - - - - - - End of currency change - - - - - - - - - - - - - - - - -->

								</div><!--/ .clearfix-->

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .container -->

				</div><!--/ .top_part -->
				
				<!-- - - - - - - - - - - - - - End of top part - - - - - - - - - - - - - - - - -->

				<hr>

				<!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

				<div class="bottom_part">

					<div class="container">

						<div class="row">

							<div class="main_header_row">

								<div class="col-sm-3">

									<!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

									<a href="index.html" class="logo">

										<img src="/images/logo.png" alt="">

									</a>

									<!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

								<div class="col-sm-3">

									<!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->

									<div class="call_us">

										<span>Call us toll free:</span> <b>+91 088700 50001</b>

									</div><!--/ .call_us-->

									<!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

								<div class="col-sm-6">

									<!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

									
									<form action="/filter" method="post" class="clearfix search type_2">
									
										<input value="{{old('search')}}" type="text" name="search" tabindex="1" placeholder="Search..." class="alignleft">
										{{ csrf_field() }}
										<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->
										
											<div class="custom_select search_category alignleft ">
										<style>
										
										</style>
												<select class="manual" style="border: 1px solid #ffffff;" name="website_main_category">
													<option>All Categories</option>
													@foreach($category as $cats)
													<option value="{{$cats->category_name}}">{{$cats->category_name}}</option>
													@endforeach
												</select>

											</div>


										<!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

										<button type="submit" class="button_blue def_icon_btn alignleft"></button>

									</form><!--/ #search-->
									<!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

							</div><!--/ .main_header_row-->

						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .bottom_part -->

				<!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->

				<!-- - - - - - - - - - - - - - Main navigation wrapper - - - - - - - - - - - - - - - - -->

				<div id="main_navigation_wrap">

					<div class="container">

						<div class="row">

							<div class="col-xs-12">

								<!-- - - - - - - - - - - - - - Sticky container - - - - - - - - - - - - - - - - -->

								<div class="sticky_inner type_2">

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_4">

										<button class="open_menu"></button>

										<!-- - - - - - - - - - - - - - Main navigation - - - - - - - - - - - - - - - - -->

										<ul class="theme_menu cats dropdown">

										

												<!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

												<div id='cssmenu' class="animated_item">
													<ul>
													   <li><a href='#'><span>Home</span></a></li>
													   <li class='has-sub has-new-sub'><a href='#'><span>Products</span></a>
														  <ul class="first-child"><!-- over all child bro -->
															 <li class='has-sub has-new-sub'><a href='#'><span>Product 1</span></a>
																<ul class="second-child">
																   <li class="has-sub has-new-sub"><a href='#'class='has-sub has-new-sub'><span>Sub Product</span></a>
																		 <ul class="second-child">
																			<li><a href='#'><span>Sub Product</span></a></li>
																			<li class='last'><a href='#'><span>Sub Product</span></a></li>
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

												<!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                                         

											

											
									{{--  <li class="has_megamenu animated_item"><a href="#" class="all"><b>All Categories</b></a></li>  --}}

										</ul>

										<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item">

										<nav class="main_navigation">

											<ul>

												<li class="home_menu"><a href="/">Home</a></li>
											
												<li class="account_menu"><a href="/">My Account</a></li>
												<li class="cart_menu"><a href="shop_shopping_cart.html">Shopping Cart</a></li>
												<li class="checkout_menu"><a href="shop_checkout.html">Checkout</a></li>
												<li class="contact_menu"><a href="/contact">Contact Us</a></li>
											

											</ul>

										</nav><!--/ .main_navigation-->

									</div>

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_4">

										<a href="#" class="wishlist_button" data-amount="7"></a>
										
									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

								

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_3">

										<button id="open_shopping_cart" class="open_button" data-amount="3">
											<b class="title">My Cart</b>
											<b class="total_price">$999.00</b>
										</button>

										<!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->

										<div class="shopping_cart dropdown">

												<div class="animated_item">

													<p class="title">Recently added item(s)</p>

													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

													<div class="clearfix sc_product">

														<a href="#" class="product_thumb"><img src="/images/sc_img_1.jpg" alt=""></a>

														<a href="#" class="product_name">Natural Factors PGX Daily Ultra Matrix...</a>

														<p>1 x $499.00</p>

														<button class="close"></button>

													</div><!--/ .clearfix.sc_product-->
													
													<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

												</div><!--/ .animated_item-->

												<div class="animated_item">

													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

													<div class="clearfix sc_product">

														<a href="#" class="product_thumb"><img src="images/sc_img_2.jpg" alt=""></a>

														<a href="#" class="product_name">Oral-B Glide Pro-Health Floss...</a>

														<p>1 x $499.00</p>

														<button class="close"></button>

													</div><!--/ .clearfix.sc_product-->
													
													<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

												</div><!--/ .animated_item-->

												<div class="animated_item">

													<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

													<div class="clearfix sc_product">

														<a href="#" class="product_thumb"><img src="/images/sc_img_3.jpg" alt=""></a>

														<a href="#" class="product_name">Culturelle Kids! Probi-<br>otic Packets 30 ea</a>

														<p>1 x $499.00</p>

														<button class="close"></button>

													</div><!--/ .clearfix.sc_product-->
													
													<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

												</div><!--/ .animated_item-->

												<div class="animated_item">

													<!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->

													<ul class="total_info">

														<li><span class="price">Tax:</span> $0.00</li>

														<li><span class="price">Discount:</span> $37.00</li>

														<li class="total"><b><span class="price">Total:</span> $999.00</b></li>

													</ul>
													
													<!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->

												</div><!--/ .animated_item-->

												<div class="animated_item">

													<a href="#" class="button_grey">View Cart</a>

													<a href="#" class="button_blue">Checkout</a>

												</div><!--/ .animated_item-->

											</div><!--/ .shopping_cart.dropdown-->
										
										<!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->
										
									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

								</div><!--/ .sticky_inner -->

								<!-- - - - - - - - - - - - - - End of sticky container - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .main_navigation_wrap-->

				<!-- - - - - - - - - - - - - - End of main navigation wrapper - - - - - - - - - - - - - - - - -->

			</header>
			
			<!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->

			@yield('content')

			<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

			<footer id="footer">

				<div class="container">

					<!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->

					<div class="infoblocks_container">

						<ul class="infoblocks_wrap">

							<li>
								<a href="#" class="infoblock type_1">

									<i class="icon-paper-plane"></i>
									<span class="caption"><b>Fast &amp; Free Delivery</b></span>

								</a><!--/ .infoblock-->
							</li>

							<li>
								<a href="#" class="infoblock type_1">

									<i class="icon-lock"></i>
									<span class="caption"><b>Safe &amp; Secure Payment</b></span>

								</a><!--/ .infoblock-->
							</li>

							<li>
								<a href="#" class="infoblock type_1">

									<i class="icon-money"></i>
									<span class="caption"><b>100% Money back Guaranted</b></span>

								</a><!--/ .infoblock-->
							</li>

						</ul><!--/ .infoblocks_wrap.section_offset.clearfix-->

					</div><!--/ .infoblocks_container -->
						
					<!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->

				</div><!--/ .container -->

				<!-- - - - - - - - - - - - - - Footer section- - - - - - - - - - - - - - - - -->

				<div class="footer_section">

					<div class="container">

						<div class="row">

							<div class="col-md-5 col-sm-6">

								<!-- - - - - - - - - - - - - - About us widget- - - - - - - - - - - - - - - - -->

								<section class="widget">

									<h4>About Us</h4>

								<p class="about_us">{{$setting->described}}</p>

									<!-- - - - - - - - - - - - - - Social icons list - - - - - - - - - - - - - - - - -->
									@if(isset($social))
									<ul class="social_btns">
										@if($social->facebook !=null)
										<li>
											<a href="{{$social->facebook}}" class="icon_btn middle_btn social_facebook tooltip_container"><i class="icon-facebook-1"></i><span class="tooltip top">Facebook</span></a>
										</li>
										@endif

										@if($social->twitter !=null)
										<li>
											<a href="{{$social->twitter}}" class="icon_btn middle_btn social_twitter tooltip_container"><i class="icon-twitter"></i><span class="tooltip top">Twitter</span></a>
										</li>
										@endif
										@if($social->google !=null)
										<li>
											<a href="{{$social->google}}" class="icon_btn middle_btn social_googleplus tooltip_container"><i class="icon-gplus-2"></i><span class="tooltip top">GooglePlus</span></a>
										</li>
										@endif
										@if($social->pinterest !=null)
										<li>
											<a href="{{$social->pinterest}}" class="icon_btn middle_btn social_pinterest tooltip_container"><i class="icon-pinterest-3"></i><span class="tooltip top">Pinterest</span></a>
										</li>
										@endif
										@if($social->flickr !=null)
										<li>
											<a href="{{$social->flickr}}" class="icon_btn middle_btn social_flickr tooltip_container"><i class="icon-flickr-1"></i><span class="tooltip top">Flickr</span></a>
										</li>
										@endif
										@if($social->youtube !=null)
										<li>
											<a href="{{$social->youtube}}" class="icon_btn middle_btn social_youtube tooltip_container"><i class="icon-youtube"></i><span class="tooltip top">Youtube</span></a>
										</li>
										@endif
										@if($social->vimeo !=null)
										<li>
											<a href="{{$social->vimeo}}" class="icon_btn middle_btn social_vimeo tooltip_container"><i class="icon-vimeo-2"></i><span class="tooltip top">Vimeo</span></a>
										</li>
										@endif
										@if($social->instagram !=null)
										<li>
											<a href="{{$social->instagram}}" class="icon_btn middle_btn social_instagram tooltip_container"><i class="icon-instagram-4"></i><span class="tooltip top">Instagram</span></a>
										</li>
										@endif
										@if($social->linkedin !=null)
										<li>
											<a href="{{$social->linkedin}}" class="icon_btn middle_btn social_linkedin tooltip_container"><i class="icon-linkedin-5"></i><span class="tooltip top">LinkedIn</span></a>
										</li>
										@endif
									</ul>
									@endif
									<!-- - - - - - - - - - - - - - End social icons list - - - - - - - - - - - - - - - - -->

								</section>
								
								<!-- - - - - - - - - - - - - - End of about us widget - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

							<div class="col-md-2 col-sm-6">

								<!-- - - - - - - - - - - - - - Information widget - - - - - - - - - - - - - - - - -->

								<section class="widget">

									<h4>Information</h4>

									<ul class="list_of_links">

										<li class="aboutus"><a href="/about">About Us</a></li>
										<li class="ppolicy"><a href="/privacy">Privacy Policy</a></li>
										<li class="tconditions"><a href="/terms">Terms &amp; Conditions</a></li>
										<li class="contactus"><a href="/contact">Contact Us</a></li>
										<li class="faq"><a href="/faq">FAQ</a></li>
										<li class="sdetails"><a href="/shipping_details">Shipping Details</a></li>

									</ul>

								</section><!--/ .widget-->
								
								<!-- - - - - - - - - - - - - - End of information widget - - - - - - - - - - - - - - - - -->
							
							</div><!--/ [col]-->

							<div class="col-md-2 col-sm-6">

								<!-- - - - - - - - - - - - - - Extras widget - - - - - - - - - - - - - - - - -->

								<section class="widget">

									<h4>Category</h4>

									<ul class="list_of_links">
												<?php if(isset($category)){?>
											@foreach($category as $row)
											<li><a href="#">{{$row->category_name}}</a></li>
													@endforeach
											<?php } ?>
									</ul>

								</section><!--/ .widget-->

								<!-- - - - - - - - - - - - - - End of extras widget - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

							<div class="col-md-2 col-sm-6">

								<!-- - - - - - - - - - - - - - My account widget - - - - - - - - - - - - - - - - -->

								<section class="widget">

									<h4>My Account</h4>

									<ul class="list_of_links">

										<li><a href="#">My Account</a></li>
										<li><a href="#">Order History</a></li>
										<li><a href="#">Returns</a></li>
										<li><a href="#">Wish List</a></li>
										<li><a href="#">Newsletter</a></li>

									</ul>

								</section><!--/ .widget-->

								<!-- - - - - - - - - - - - - - End my account widget - - - - - - - - - - - - - - - - -->

							</div>

							<div class="col-md-3 col-sm-6">

								<!-- - - - - - - - - - - - - - Blog widget - - - - - - - - - - - - - - - - -->

							

								<!-- - - - - - - - - - - - - - End of blog widget - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .container -->

				</div><!--/ .footer_section_2-->

				<!-- - - - - - - - - - - - - - End footer section- - - - - - - - - - - - - - - - -->

				<hr>

				<!-- - - - - - - - - - - - - - Footer section - - - - - - - - - - - - - - - - -->

				<div class="footer_section_3 align_center">

					<div class="container">

						<!-- - - - - - - - - - - - - - Payments - - - - - - - - - - - - - - - - -->

						<ul class="payments">

							<li><img src="/images/payment_1.png" alt=""></li>
							<li><img src="/images/payment_2.png" alt=""></li>
							<li><img src="/images/payment_3.png" alt=""></li>
							<li><img src="/images/payment_4.png" alt=""></li>
							<li><img src="/images/payment_5.png" alt=""></li>
							<li><img src="/images/payment_6.png" alt=""></li>
							<li><img src="/images/payment_7.png" alt=""></li>
							<li><img src="/images/payment_8.png" alt=""></li>

						</ul>
						
						<!-- - - - - - - - - - - - - - End of payments - - - - - - - - - - - - - - - - -->

						<!-- - - - - - - - - - - - - - Footer navigation - - - - - - - - - - - - - - - - -->

						<nav class="footer_nav">

							<ul class="bottombar">
								<?php if(isset($category)){?>
								@foreach($category as $row)
								<li><a href="#">{{$row->category_name}}</a></li>
										@endforeach
								<?php } ?>
							</ul>

						</nav>
						
						<!-- - - - - - - - - - - - - - End of footer navigation - - - - - - - - - - - - - - - - -->

						<p class="copyright">&copy; 2018 <a href="index.html">K.A.S Housing Pvt Ltd</a>. All Rights Reserved.</p>

					</div><!--/ .container -->

				</div><!--/ .footer_section-->

				<!-- - - - - - - - - - - - - - End footer section - - - - - - - - - - - - - - - - -->

			</footer>
			
			<!-- - - - - - - - - - - - - - End Footer - - - - - - - - - - - - - - - - -->

		</div><!--/ [layout]-->
		
		<!-- - - - - - - - - - - - - - End Main Wrapper - - - - - - - - - - - - - - - - -->

		<!-- - - - - - - - - - - - - - Social feeds - - - - - - - - - - - - - - - - -->

		<ul class="social_feeds">

			<!-- - - - - - - - - - - - - - Facebook - - - - - - - - - - - - - - - - -->

			<li>

				<button class="icon_btn middle_btn social_facebook open_"><i class="icon-facebook-1"></i></button>

				
				<section class="dropdown">

					<div class="animated_item">

						<h3 class="title">Join Us on Facebook</h3>

					</div><!--/ .animated_item-->

					<div class="animated_item">
						@if(isset($social))
					<iframe src="{{$social->facebook}}" style="border:none; overflow:hidden; width:235px; height:345px;"></iframe>
						@endif
					</div><!--/ .animated_item-->

				</section><!--/ .dropdown-->

			</li>

			<!-- - - - - - - - - - - - - - End of Facebook - - - - - - - - - - - - - - - - -->

		

			<!-- - - - - - - - - - - - - - Contact us - - - - - - - - - - - - - - - - -->

			<li>

				<button class="icon_btn middle_btn social_contact open_"><i class="icon-mail-8"></i></button>

				<section class="dropdown">

					<div class="animated_item">

						<h3 class="title">Contact Us</h3>

					</div><!--/ .animated_item-->
					 
					<div class="animated_item">

						{{-- <p class="form_caption">Lorem ipsum dolor sit amet, adipis mauris accumsan.</p> --}}

						<form class="contactform" novalidate>

							<ul>

								<li class="row">

									<div class="col-xs-12">

										<input type="text" required title="Name" name="cf_name" placeholder="Your name">

									</div>

								</li>

								<li class="row">

									<div class="col-xs-12">

										<input type="email" required title="Email" name="cf_email" placeholder="Your address">

									</div>

								</li>

								<li class="row">

									<div class="col-xs-12">

										<textarea placeholder="Message" required title="Message" name="cf_message" rows="6"></textarea>

									</div>

								</li>
								
								<li class="row">

									<div class="col-xs-12">

										<button class="button_grey middle_btn">Send</button>

									</div>

								</li>

							</ul>

						</form>

					</div><!--/ .animated_item-->

				</section><!--/ .dropdown-->

			</li>

			<!-- - - - - - - - - - - - - - End contact us - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - Google map - - - - - - - - - - - - - - - - -->

			<li>

				<button class="icon_btn middle_btn social_gmap open_"><i class="icon-location-4"></i></button>

				<!--Location-->

				<section class="dropdown">

					<div class="animated_item">

						<h3 class="title">Store Location</h3>

					</div><!--/ .animated_item-->
					 
					<div class="animated_item">
						
						<p class="c_info_location">{{$setting->address}}</p>

						<div class="proportional_frame">

							<iframe src="{{$setting->map2}}" style="border:0"></iframe>

						</div>

						<ul class="c_info_list">

							<li class="c_info_phone">{{$setting->phone}}</li>
							<li class="c_info_mail"><a href="mailto:#">{{$setting->email}}</a></li>
							<li class="c_info_schedule">

								<ul>

									<li>Monday-Friday: 8.00-20.00</li>
									<li>Saturday: 9.00-15.00</li>
									<li>Sunday: closed</li>

								</ul>

							</li>

						</ul>

					</div><!--/ .animated_item-->

				</section><!--/ .dropdown-->
			
			</li>

			<!-- - - - - - - - - - - - - - End google map - - - - - - - - - - - - - - - - -->

		</ul>

		<!-- - - - - - - - - - - - - - End Social feeds - - - - - - - - - - - - - - - - -->
		
		<!-- Include Libs & Plugins
		============================================ -->
		<script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
		<script src="{{asset('js/queryloader2.min.js')}}"></script>
		<script src="{{asset('js/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{asset('js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script src="{{asset('js/jquery.appear.js')}}"></script>
		<script src="{{asset('js/owlcarousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/jquery.countdown.plugin.min.js')}}"></script>
		<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
		<script src="{{asset('js/arcticmodal/jquery.arcticmodal.js')}}"></script>
		 <script src="{{asset('twitter/jquery.tweet.min.js')}}"></script> 
		<script src="{{asset('js/colorpicker/colorpicker.js')}}"></script>
		<script src="{{asset('js/retina.min.js')}}"></script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js"></script>

		<!-- Theme files
		============================================ -->
		<script src="{{asset('js/theme.plugins.js')}}"></script>
		<script src="{{asset('js/theme.core.js')}}"></script>
		
	</body>

	@yield('extra-js')
</html>