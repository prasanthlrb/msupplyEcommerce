@extends('layout.app')
@section('content')

<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

	<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="/">Home</a></li>
						<li>Compare Products</li>

					</ul>

					<!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

					<h1>Compare Products</h1>
					@if(count($product)>0)
					<div class="table_wrap">
						
						<table class="table_type_1 compare">

							<tbody>

								<tr>
									
									<th class="row_title_col">Product Image</th>
									@foreach($product as $row)
									<td>

										<a href="#"><img src="/product_img/{{$row->product_image}}" alt=""></a>

									</td>
									@endforeach

								</tr>

								<tr>
									
									<th class="row_title_col">Product Name</th>
									@foreach($product as $row)
									<td>

										<a href="/product/{{$row->id}}">{{$row->product_name}}</a>

									</td>
									@endforeach
								</tr>

								<tr>
									
									<th class="row_title_col">Rating</th>
									@foreach($product as $row)
									<td>

										<div class="v_baseline">

											<ul class="rating">
												<li class="active"></li>
												<li class="active"></li>
												<li class="active"></li>
												<li class="active"></li>
												<li></li>
											</ul>

											<a href="#" class="small_link">3 Review(s)</a>

										</div>

									</td>

									@endforeach

								</tr>

								<tr>
									
									<th class="row_title_col">Price</th>
										@foreach($product as $row)
									<td class="total">{{$row->sales_price}}</td>
										@endforeach

								</tr>

								<tr>
									
									<th class="row_title_col">Description</th>
								@foreach($product as $row)
									<td>
										
										<?php 
                  
                  echo html_entity_decode($row->product_description);
                  ?>

									</td>
								@endforeach

								</tr>


								<tr>
									
									<th class="row_title_col">Availability</th>
									@foreach($product as $row)
							

									@if($row->stock_quantity !="")
                                          
                                            <td><span class="in_stock">in stock</span> {{$row->stock_quantity}} item(s)</td>
                                        @else    
        
                                            <td><span style="color:red;">Out of Stock</span></td>
                                        @endif
									@endforeach

								</tr>

								<tr>
									
									<th class="row_title_col">SKU</th>
									@foreach($product as $row)
									<td>{{$row->sku}}</td>
									@endforeach

								</tr>

								<tr>
									
									<th class="row_title_col">Weight</th>
									@foreach($product as $row)
									<td>{{$row->weight}}kg</td>

									@endforeach
								</tr>

								<tr>
									
									<th class="row_title_col">Dimensions<br>(L x W x H)</th>

									@foreach($product as $row)

									<td>{{$row->length}}x{{$row->width}}x{{$row->height}} Cm</td>
									@endforeach

								</tr>

								<tr>
									
									<th class="row_title_col">Action</th>
									@foreach($product as $row)
									<td>

										<div class="buttons_row">
										
											<a href="/product/{{$row->id}}" class="button_blue middle_btn">See product Page</a>

											<a href="javascript:void(null)" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></a>

											 <a href="/remove-compare/{{$row->id}}" class="button_dark_grey middle_btn icon_btn tooltip_container"><span class="tooltip top">Remove from Compare</span><i class="icon-cancel-2"></i></a>

										</div>

									</td>
									@endforeach

								</tr>

							</tbody>

						</table>

					</div>
					@else
					<br><h3 style="text-align:center;">Compare Product is Empty</h3>
					@endif
				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
			<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

@endsection
@section('extra-js')

@endsection