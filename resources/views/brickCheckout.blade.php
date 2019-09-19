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
	  border: 2px solid #58585a;
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
	.transport_style{
	border: #58585a 1px solid;
    padding: 15px;
    text-align: justify;
    margin-left: 10px;
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

							
						<div class="left_side v_centered">

								<span>Forgot anything from Transport?</span>

								<a href="/edit-transport" class="button_grey middle_btn">Edit Your Transport</a>

							</div>
							<br>
						<br>
						<h3>Select Payment Type</h3>
							<ul class="simple_vertical_list">

									<li>

										<input value="cod" type="radio" checked name="payment_type" id="radio_button_1">
										<label for="radio_button_1">Cash on Delivery</label>

									</li>

									<li>

										<input value="online" type="radio" name="payment_type" id="radio_button_2">
										<label for="radio_button_2">Pay Online</label>

									</li>

								</ul>



						<br>
						<br>
						<br>


						<h3>Order Review</h3>



						<div class="table_wrap">

							<table class="table_type_1 order_review">

								<thead>
									<tr>
										<th colspan="2" class="product_title_col">Product Name</th>
										<th class="product_price_col">Price</th>
										<th class="product_qty_col">Quantity</th>
										<th class="product_qty_col" style="width:15% !important">TAX(GST)</th>
										{{-- <th class="product_qty_col">Sub Total</th> --}}
										<th class="product_total_col">Total</th>
									</tr>
								</thead>

								<tbody>
									<?php echo $result?>
								</tbody>

								<tfoot>
									@if(Session::has('transport'))
								<tr>
										<td colspan="5" class="bold">Transport </td>
								<td class="total" style="text-align:center">₹ {{$transport_Price}}</td>
									</tr>
									<?php $totalPrice+=$transport_Price?>
									@endif
									{{-- <tr>
										<td colspan="5" class="bold"> Exclusive Tax (GST)</td>

										<td class="total">₹ </td>
									</tr> --}}


									<tr>
										<td colspan="5" class="grandtotal">Grand Total</td>
										<td class="grandtotal" style="text-align:center">₹ {{$totalPrice}}</td>
									</tr>

								</tfoot>

							</table>

						</div>

						<footer class="bottom_box on_the_sides">

							<div class="left_side v_centered">

								<span>Forgot an item?</span>

								<a href="/cart" class="button_grey middle_btn">Edit Your Cart</a>

							</div>

							<div class="right_side">

								<button type="button" class="button_blue middle_btn" id="order_button">PLACE TO ORDER</button>

							</div>

						</footer>
					</form>

					</section>

					<!-- - - - - - - - - - - - - - End of order review - - - - - - - - - - - - - - - - -->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			@section('extra-js')
			<script>
				var pay_type = 1;
			$('#radio_button_1').click(function(){
				pay_type = 1;
				$('#order_button').text('PLACE TO ORDER')
			});
			$('#radio_button_2').click(function(){
				pay_type = 2;
				$('#order_button').text('PROCEED TO PAY')
			});
            var otpValue = 666333;
		$('#order_button').click(function(){
            if($('input[name=payment_type]:checked').val() == 'cod'){
                $.ajax({
                    url:'/account/verify-order-sms',
                    method:'GET',
                    success:function(data){
                        $.arcticmodal({
                        url : 'modals/otp.html'
                    });
                    }
                })
            }else{
                var shipping = $('input[name=ship]:checked').val();
			var billing = $('input[name=billing]:checked').val();
      window.location.href = '/order-placed/'+pay_type+'/'+shipping+'/'+billing;
            }


            })

            function otpVerified(){
        var shipping = $('input[name=ship]:checked').val();
	    var billing = $('input[name=billing]:checked').val();
      window.location.href = '/order-placed/'+pay_type+'/'+shipping+'/'+billing;
            }

			</script>
			@endsection
@endsection
