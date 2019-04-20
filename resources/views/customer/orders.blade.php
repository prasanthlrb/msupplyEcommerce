@extends('layout.app')
@section('content')
			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="index.html">Home</a></li>
						<li>Orders</li>

					</ul>

					<!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

					<div class="row">
						@include('include.accountSidebar')

                        <main class="col-md-9 col-sm-8">

							<h1>My Orders</h1>

							<header class="top_box on_the_sides">

									

								<div class="right_side">
										{{$orders->links()}}
									<ul class="pags">
											
										<li><a href="#"></a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"></a></li>

									</ul>

								</div>

							</header><!--/ .top_box -->

							<div class="table_wrap">

								<table class="table_type_1 orders_table">

									<thead>

										<tr>
											
											<th class="order_number_col">Order Number</th>
											<th>Order Date</th>
											<th class="ship_col">Ship To</th>
											<th>Order Status</th>
											<th class="order_total_col">Total</th>
											<th class="product_action_col">Action</th>

										</tr>

									</thead>

									<tbody>
									@foreach($orders as $order)
										<tr>
											<td data-title="Order Number"><a href="#">{{$order->id}}</a></td>
											<td data-title="Order Date">{{date('Y-m-d', strtotime($order->created_at))}}</td>
											<td data-title="Ship To">
												<p>{{$order->first_name}} - {{$order->last_name}}</p>
												<p>{{$order->telephone}}</p>
												<p>{{$order->address}}</p>
												<p>{{$order->zip}}</p>
											</td>
											<td data-title="Order Status">
												@if($order->order_status == 1)
												Processing
												@elseif($order->order_status == 2)
												Completed
												@elseif($order->order_status == 3)
												On hold
												@elseid($order->order_status == 4)
												Cancelled
												@elseid($order->order_status == 5)
												Failed
												@endif
											</td>
											<td data-title="Total" class="total">₹ {{$order->total_amount}}</td>
											<td data-title="Action">
												<ul class="buttons_col">
													<li>
														<a href="/account/vieworders/{{$order->id}}" class="button_grey">View Order</a>
													</li>
													<!-- <li>
														<a href="#" class="button_grey">Reorder</a>
													</li> -->
												</ul>
											</td>
										</tr>
									@endforeach
									</tbody>

								</table>

							</div>

						</main><!--/ [col]-->
					</div><!--/ .row-->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
            <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
<script>
	$('.orders').addClass('accSidebarActive');
</script>   
			@endsection
			
			@section('extra-js')

@endsection