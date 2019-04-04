@extends('layout.app')
@section('extra-css')

<style>
	.item-align-left-shipping{
	margin-left: 30px;
	width: auto !important;
	float: none !important;
	}
	
	.address-align{
	margin-left: 30px;
	width: 50% !important;
	float: none !important;
	}
   
	.shipping-row{
	  padding: 10px;
	  margin-left: 10px;
	  margin-top: 15px;
	  border: 2px solid #93c4e0f7;
	  height: 220px;
	}
	.shipping-details{
	  float: right !important;
	  color: #ffffff;
	  font-size: 14px;
	  background: #3498db;
	  padding: 6px;
	  border-radius: 5px;
	 width: auto !important;
	}
  </style>
@endsection
@section('content')

<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="/">Home</a></li>
						<li>Checkout</li>

					</ul>

					<h1 class="page_title">Checkout</h1>


					<!-- - - - - - - - - - - - - - Billing information - - - - - - - - - - - - - - - - -->

<!-- <form method="post" id="form" action="#"> -->
						<section class="section_offset">

					<form action="" method="POST">

						<div class="theme_box">

							<h3>Shipping Information</h3>

					

							<ul class="simple_vertical_list">
								<div class="row">
									<?php $x=1 ?>
									@foreach ($shipping as $item)
								
									<li class="col-sm-4 col-md-4 col-lg-4  shipping-row">
											<div class="col-xs-12">
												<label for="radio_<?php echo $x?>" class="item-align-left-shipping">{{$item->first_name}}</label>
												<label for="radio_<?php echo $x?>" class="item-align-left-shipping">{{$item->last_name}}</label><br>
												<label for="radio_<?php echo $x?>" class="item-align-left-shipping">{{$item->email}}</label><br>
										
												@if($x == 1)
												<input type="radio" checked name="ship" id="radio_<?php echo $x?>" value="{{$item->id}}">
												@else
												<input type="radio" name="ship" id="radio_<?php echo $x?>" value="{{$item->id}}">
												@endif
												<label for="radio_<?php echo $x?>">{{$item->telephone}}</label><label class="shipping-details" for=billing_<?php echo $x?>">
													@if($item->address_type == 1)
													Home
													@else
													Work
													@endif
													</label><br>
												<label for="radio_<?php echo $x?>" class="address-align">{{$item->address}}</label><br>
												<label for="radio_<?php echo $x?>" class="item-align-left-shipping">{{$item->state}}</label> <label class="item-align-left-shipping" for="radio_<?php echo $x?>">{{$item->zip}}</label>
												
											</div>
		
										</li>	
										
								
									
										
										<?php 
										
										
										$x++?>
										
									@endforeach
									
								</div>
							
							</ul>
							<br>
							<div class="left_side">

									<a href="/shipping" class="button_blue middle_btn">Create New Shipping Details</a>
	
								</div>
	
							<br>
							<h3>Billing Information</h3>

					

							<ul class="simple_vertical_list">
									<div class="row">
										<?php $x=1 ?>
										@foreach ($billing as $item)
									
										<li class="col-sm-4 col-md-4 col-lg-4 shipping-row">
												<div class="col-xs-12">
													<label for=billing_<?php echo $x?>" class="item-align-left-shipping">{{$item->first_name}}</label>
													<label for=billing_<?php echo $x?>" class="item-align-left-shipping">{{$item->last_name}}</label><br>
													<label for=billing_<?php echo $x?>" class="item-align-left-shipping">{{$item->email}}</label><br>
													@if($x == 1)
													<input type="radio" checked name="billing" id="billing_<?php echo $x?>" value="{{$item->id}}">
													@else
													<input type="radio" name="billing" id="billing_<?php echo $x?>" value="{{$item->id}}">
													@endif
													<label for=billing_<?php echo $x?>" class="item-align-left-shipping">{{$item->telephone}}</label><br>
													<label for=billing_<?php echo $x?>" class="address-align">{{$item->address}}</label><br>
													<label for=billing_<?php echo $x?>" class="item-align-left-shipping">{{$item->state}}</label>  <label class="item-align-left-shipping" for=billing_<?php echo $x?>">{{$item->zip}}</label>
													
												</div>
											
													
												
											</li>	
											
									
										
											
											<?php 
											
											
											$x++?>
											
										@endforeach
										
									</div>
								
								</ul>
								<br>
								<div class="left_side">
	
										<a href="/billing" class="button_blue middle_btn">Create New Billing Details</a>
		
									</div>
							<br>
							<h3>Payment Information</h3>

					

							<ul class="simple_vertical_list">

								<li>
									<input value="cod" type="radio" checked name="payment_type" id="payment_type">
									<label for="payment_type">Pay Pal</label>
								</li>

								

							</ul>

					
						<br>
						<br>
						<footer class="bottom_box"></footer>
						<h3>Order Review</h3>

						

						<div class="table_wrap">

							<table class="table_type_1 order_review">

								<thead>
									<tr>
										<th colspan="2" class="product_title_col">Product Name</th>
										<th class="product_price_col">Price</th>
										<th class="product_qty_col">Quantity</th>
										<th class="product_total_col">Total</th>
									</tr>
								</thead>

								<tbody>
									<?php $shipping_charge=0;?>
								@foreach($getCart as $getCarts)
								
									<tr>
										<td colspan="2" data-title="Product Name">
											
											<a href="#" class="product_title">{{$getCarts->name}}</a>
											<ul class="sc_product_info">
											@if(count($getCarts->attributes)>0)
											@foreach($getCarts->attributes as $key=>$value)
											@foreach($value as $field => $row)
												<li><?php echo $field.' : '.$row.'<br>'?></li>
											@endforeach
											@endforeach
											@endif 
											@foreach($product_data as $datas)
											@if($datas->product_id == $getCarts->id)
											@if($datas->shipping_type == 1)
											<li> Shipping : Free</li>
											@else
												<?php $shipping_charge +=$datas->shipping_amount;?>
										 <li> Shipping Charge: {{$datas->shipping_amount}}</li>
										  
										  @endif 
										  @endif
										  @endforeach
											</ul>

										</td>

										<td data-title="Price" class="subtotal">AED {{$getCarts->price}}</td>

										<td data-title="Quantity">{{$getCarts->quantity}}</td>

										<td data-title="Total" class="total">AED {{$getCarts->quantity * $getCarts->price}}</td>

									</tr>
								@endforeach
								</tbody>
								<?php 
								$total=0;
								$subTotal=0;
								$tax=0;
								foreach($getCart as $tot){
									$total += $tot->quantity * $tot->price;
									$tax = round($total*5/105,2);
									$subTotal =  $total - $tax;
								}
								$total = $total+$shipping_charge;
								?>
								<tfoot>
									<tr>
										<td colspan="4" class="bold">Subtotal</td>
										<td class="total">AED {{$subTotal}}</td>
									</tr>
									<tr>
										<td colspan="4" class="bold">Tax 5%( price inclusive of VAT )</td>
										<td class="total">AED {{$tax}}</td>
									</tr>
									<tr>
										<td colspan="4" class="bold">Shipping Charge </td>
										<td class="total">AED {{$shipping_charge}}</td>
									</tr>
									<?php
            $coupon_data = Session::get('coupon');
                            if(!empty($coupon_data)){
?>
                            <tr class="couponLabel"><td colspan="4">Coupon Discount({{$coupon_data[0]['name']}}) </td>
                            <td style="color:#6db108">AED -{{$coupon_data[0]['value']}}</td></tr>
                       <?php     $total = $total - $coupon_data[0]['value'];
                            }
                          ?>
                       
									<tr>
										<td colspan="4" class="grandtotal">Grand Total</td>
										<td class="grandtotal">AED {{$total}}</td>
									</tr>

								</tfoot>

							</table>

						</div><!--/ .table_wrap -->

						<footer class="bottom_box on_the_sides">

							<div class="left_side v_centered">

								<span>Forgot an item?</span>

								<a href="/cart" class="button_grey middle_btn">Edit Your Cart</a>

							</div>

							<div class="right_side">

								<button type="submit" class="button_blue middle_btn">PROCEED TO PAY</button>

							</div>

						</footer>
					</form>

					</section>

					<!-- - - - - - - - - - - - - - End of order review - - - - - - - - - - - - - - - - -->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->

@endsection