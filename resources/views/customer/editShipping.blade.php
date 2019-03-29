@extends('layout.app')
@section('content')

<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="/">Home</a></li>
						<li>Shipping</li>

					</ul>

					<h1 class="page_title">Edit Shipping Shipping Address</h1>


					<!-- - - - - - - - - - - - - - Billing information - - - - - - - - - - - - - - - - -->

<!-- <form method="post" id="form" action="#"> -->
						<section class="section_offset">

					
						<div class="theme_box">

							<a class="icon_btn button_dark_grey edit_button" href="#"><i class="icon-pencil"></i></a>

						<form action="/createShipping" method="post" class="type_2">
						{{ csrf_field() }}
							<ul>
							
								<li class="row">
									<div class="col-sm-6">
										<label for="first_name" class="required">First Name</label>
										<input value="<?php echo old('first_name'); ?>" type="text" name="first_name" id="first_name">
										<label style="color:red;"><?php echo $errors->first('first_name'); ?></label>
									</div>
									<div class="col-sm-6">
										<label for="last_name" class="required">Last Name</label>
										<input value="<?php echo old('last_name'); ?>" type="text" name="last_name" id="last_name">
										<label style="color:red;"><?php echo $errors->first('last_name'); ?></label>
									</div>
								</li>

									<li class="row">
										
										<div class="col-sm-6">
											
											<label for="email_address" class="required">Email Address</label>
											<input value="<?php echo old('email'); ?>" type="email" name="email" id="email">
											<label style="color:red;"><?php echo $errors->first('email_address'); ?></label>

										</div>
										<div class="col-sm-6">

											<label for="telephone" class="required">Telephone</label>
											<input value="<?php echo old('telephone'); ?>" type="text" name="telephone" id="telephone">
											<label style="color:red;"><?php echo $errors->first('telephone'); ?></label>

										</div>

									</li>

									<li class="row">	

										<div class="col-xs-12">

											<label for="address" class="required">Address</label>
											<textarea id="address" name="address"><?php echo old('address'); ?></textarea>
											<label style="color:red;"><?php echo $errors->first('address'); ?></label>

										</div>

									</li>


									<li class="row">

										<div class="col-sm-6">
											
											<label for="city" class="required">City</label>
											<input value="<?php echo old('city'); ?>" type="text" name="city" id="city">
											<label style="color:red;"><?php echo $errors->first('city'); ?></label>

										</div>

										<div class="col-sm-6">

											<label class="required">State/Province</label>

											<div class="custom_select">

												<select name="state" id="state">
												@if (old('state') != "")
												<option value="<?php echo old('state'); ?>"><?php echo old('state'); ?></option>
												@else
													<option value="Abu Dhabi">Abu Dhabi</option>
													<option value="Ajman">Ajman</option>
													<option value="Sharjah">Sharjah</option>
													<option value="Dubai">Dubai</option>
													<option value="Fujairah">Fujairah</option>
													<option value="Ras Al Khaimah">Ras Al Khaimah</option>
													<option value="Umm Al Quwain">Umm Al Quwain</option>
												@endif
												</select>
												<label style="color:red;"><?php echo $errors->first('state'); ?></label>

											</div>

										</div>

									</li>

									<li class="row">

										<div class="col-sm-6">

											<label for="postal_code" class="required">Zip/Postal Code</label>
											<input value="<?php echo old('postal_code'); ?>" type="text" name="postal_code" id="postal_code">
											<label style="color:red;"><?php echo $errors->first('postal_code'); ?></label>

										</div><!--/ [col] -->

										<div class="col-sm-6">

											<label class="required">Country</label>

											<div class="custom_select">
												
												<select name="country" id="country">
												@if (old('country') != "")
												<option value="<?php echo old('country'); ?>"><?php echo old('country'); ?></option>
												@else
												<option value="UAE">UAE</option>
												@endif
												</select>
												<label style="color:red;"><?php echo $errors->first('country'); ?></label>

											</div>

										</div><!--/ [col] -->

									</li><!--/ .row -->
                                    <li class="row">

										<div class="col-xs-12">
											<label for="Address Type" class="required">Address Type :</label>
										<br>
											<input {{ (old('address_type') == '1') ? 'checked' : '' }} value="1" type="radio" checked name="address_type" id="address_type_1">
											<label for="address_type_1">Home</label>

											<input {{ (old('address_type') == '2') ? 'checked' : '' }} value="2" type="radio" name="address_type" id="address_type_2">
											<label for="address_type_2">Work</label>
										</div>

									</li>

                                    <br>
                            </ul>
                            <footer class="bottom_box on_the_sides">

                                
    
                                <div class="right_side">
    
                                    <button type="submit" class="button_blue middle_btn">Submit</button>
    
                                </div>
    
                            </footer>
                        </form>
						</div>
					</section>

					<!-- - - - - - - - - - - - - - End of order review - - - - - - - - - - - - - - - - -->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->

@endsection