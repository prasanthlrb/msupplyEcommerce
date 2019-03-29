@extends('layout.app')
@section('content')

<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

<div class="secondary_page_wrapper">

    <div class="container">

        <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

        <ul class="breadcrumbs">

            <li><a href="index.html">Home</a></li>
            <li>manage address</li>

        </ul>

        <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

        <div class="row">

            @include('include.accountSidebar')
            <main class="col-md-9 col-sm-8">
                @foreach($orders as $order)
                    <h1>Order #{{$order->invoice}} - @if($order->order_status == 1)
                        Processing
                        @elseif($order->order_status == 2)
                        Completed
                        @elseif($order->order_status == 3)
                        On hold
                        @elseid($order->order_status == 4)
                        Cancelled
                        @elseid($order->order_status == 5)
                        Failed
					@endif</h1>

                    <!-- - - - - - - - - - - - - - Order table - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <!-- <header class="top_box">

                            <div class="buttons_row">

                                <a href="#" class="button_grey middle_btn">Reorder</a>

                                <a href="#" class="button_grey middle_btn">Print Order</a>

                            </div>

                        </header> -->

                        <div class="table_wrap">

                            <table class="table_type_1 order_table">

                                <tbody>
                                    <tr>
                                        <th>Order Number</th>

                                        <td><a href="#">{{$order->invoice}}</a></td>
                                    </tr>
                                    <tr>
                                        <th>Order Date</th>
                                        <td>{{date('Y-m-d', strtotime($order->created_at))}}</td>
                                    </tr>

                                    <tr>
                                        <th>Product Status</th>
                                        <td>@if($order->order_status == 1)
												Processing
												@elseif($order->order_status == 2)
												Completed
												@elseif($order->order_status == 3)
												On hold
												@elseid($order->order_status == 4)
												Cancelled
												@elseid($order->order_status == 5)
												Failed
												@endif</td>
                                    </tr>

                                    <!-- <tr>
                                        <th>Shipment</th>
                                        <td>United Parcel Service - Worldwide Expedited</td>
                                    </tr> -->

                                    <tr>
                                        
                                        <th>Payment</th>

                                        <td>@if($order->payment_type == 'cod')
												Cash On Delivery
												@endif</td>

                                    </tr>

                                    <tr>

                                        <th>Total</th>

                                        <td class="total">AED {{$order->total}}</td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div><!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of order table - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <div class="row">

                            <div class="col-md-6">

                                <!-- - - - - - - - - - - - - - Bill to - - - - - - - - - - - - - - - - -->

                                <section>

                                    <h3>Bill To</h3>

                                    <div class="table_wrap">

                                        <table class="table_type_1 order_table">

                                            <tbody>
                                            @foreach($billing as $bill)
                                                <tr>
                                                    <th>Email</th>
                                                    <td><a>{{$bill->email}}</a></td>
                                                </tr>
                                                <tr>
                                                    <th>Name</th>
                                                    <td>{{$bill->first_name}} {{$bill->last_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <td>{{$bill->address}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Zip/Postal Code</th>
                                                    <td>{{$bill->zip}}</td>
                                                </tr>
                                                <tr>
                                                    <th>City</th>
                                                    <td>{{$bill->city}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Country</th>
                                                    <td>{{$bill->country}}</td>
                                                </tr>
                                                <tr>
                                                    <th>State</th>
                                                    <td>{{$bill->state}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>{{$bill->telephone}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                        </table>

                                    </div>

                                </section>

                                <!-- - - - - - - - - - - - - - End of bill to - - - - - - - - - - - - - - - - -->

                            </div><!--/ [col] -->

                            <div class="col-md-6">

                                <!-- - - - - - - - - - - - - - Ship to - - - - - - - - - - - - - - - - -->

                                <section>

                                    <h3>Ship To</h3>

                                    <div class="table_wrap">

                                        <table class="table_type_1 order_table">

                                            <tbody>
                                            @foreach($shipping as $ship)
                                                <tr>
                                                    <th>Email</th>
                                                    <td><a>{{$ship->email}}</a></td>
                                                </tr>
                                                <tr>
                                                    <th>Name</th>
                                                    <td>{{$ship->first_name}} {{$ship->last_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <td>{{$ship->address}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Zip/Postal Code</th>
                                                    <td>{{$ship->zip}}</td>
                                                </tr>
                                                <tr>
                                                    <th>City</th>
                                                    <td>{{$ship->city}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Country</th>
                                                    <td>{{$ship->country}}</td>
                                                </tr>
                                                <tr>
                                                    <th>State</th>
                                                    <td>{{$ship->state}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>{{$ship->telephone}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                        </table>

                                    </div>

                                </section>

                                <!-- - - - - - - - - - - - - - End of ship to - - - - - - - - - - - - - - - - -->

                            </div><!--/ [col] -->

                        </div><!--/ .row -->

                    </div><!--/ .section_offset -->
                    @endforeach

                    <!-- - - - - - - - - - - - - - Items ordered - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3>Items Ordered</h3>

                        <div class="table_wrap">

                            <table class="table_type_1 order_review">

                                <thead>
                                    
                                    <tr>
                                        
                                        <th class="product_title_col">Product Name</th>
                                        <th class="product_price_col">Price</th>
                                        <th class="product_qty_col">Quantity</th>
                                        <th class="product_total_col">Total</th>

                                    </tr>

                                </thead>

                                <tbody>
                                <?php
                                $sub = 0;
                                $total = 0;
                                $shipping = 0;
                                ?>
                                @foreach($order_items as $order_item)
                                    <tr>
                                        <td data-title="Product Name">
                                            <a href="#" class="product_title">
                                                @foreach($product as $product1)
                                                    @if($product1->id == $order_item->product_id)
                                                    {{$product1->product_name}}
                                                    @endif
                                                @endforeach                                  
                                            </a>
                                            <!-- <ul class="sc_product_info">
                                                <li>Size: Big</li>
                                                <li>Color: Red</li>
                                            </ul> -->
                                        </td>
                                        <td data-title="Price" class="subtotal">AED {{$order_item->price}}</td>
                                        <td data-title="Quantity">{{$order_item->qty}}</td>
                                        <td data-title="Total" class="total">AED {{$order_item->price * $order_item->qty}}</td>
                                    </tr>
                                    <?php 
                                    $sub+=($order_item->price * $order_item->qty);
                                    $total+=($order_item->price * $order_item->qty)+$order_item->shipping_amount;
                                    $shipping += $order_item->shipping_amount;
                                    ?>
                                @endforeach
                                </tbody>

                                <tfoot>

                                    <tr>
                                        
                                        <td colspan="3" class="bold">Subtotal</td>
                                        <td class="total">AED {{$sub}}</td>

                                    </tr>

                                    <tr>
                                        
                                        <td colspan="3" class="bold">Shipping &amp; Charge</td>
                                        <td class="total">AED {{$shipping}}</td>

                                    </tr>

                                    <tr>
                                        
                                        <td colspan="3" class="grandtotal">Grand Total</td>
                                        <td class="grandtotal">AED {{$total}}</td>

                                    </tr>

                                </tfoot>

                            </table>

                        </div><!--/ .table_wrap -->

                        <!-- <footer class="bottom_box">

                            <a href="shop_orders_list.html" class="button_grey middle_btn">Back to My Orders</a>

                        </footer> -->

                    </section>

                    <!-- - - - - - - - - - - - - - End of items ordered - - - - - - - - - - - - - - - - -->

                            @if(empty($review[0]))
                                <section class="section_offset">
                                    <h3>Write Your Own Review</h3>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>You're reviewing: <a href="#">Metus nulla facilisi, Original 24 fl oz</a><br>How do you rate this product? *</p>
                                            <div class="table_wrap rate_table">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>1 Star</th>
                                                            <th>2 Stars</th>
                                                            <th>3 Stars</th>
                                                            <th>4 Stars</th>
                                                            <th>5 Stars</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Price</td>
                                                            <td>
                                                                <input value="1" checked type="radio" name="price_rate" id="rate_1">
                                                                <label for="rate_1"></label>
                                                            </td>
                                                            <td>
                                                                <input value="2" type="radio" name="price_rate" id="rate_2">
                                                                <label for="rate_2"></label>
                                                            </td>
                                                            <td>
                                                                <input value="3" type="radio" name="price_rate" id="rate_3">
                                                                <label for="rate_3"></label>
                                                            </td>
                                                            <td>
                                                                <input value="4" type="radio" name="price_rate" id="rate_4">
                                                                <label for="rate_4"></label>
                                                            </td>
                                                            <td>
                                                                <input value="5" type="radio" name="price_rate" id="rate_5">
                                                                <label for="rate_5"></label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value</td>
                                                            <td>
                                                                <input value="1" checked type="radio" name="value_rate" id="rate_6">
                                                                <label for="rate_6"></label>
                                                            </td>
                                                            <td>
                                                                <input value="2" type="radio" name="value_rate" id="rate_7">
                                                                <label for="rate_7"></label>
                                                            </td>
                                                            <td>
                                                                <input value="3" type="radio" name="value_rate" id="rate_8">
                                                                <label for="rate_8"></label>
                                                            </td>
                                                            <td>
                                                                <input value="4" type="radio" name="value_rate" id="rate_9">
                                                                <label for="rate_9"></label>
                                                            </td>
                                                            <td>
                                                                <input value="5" type="radio" name="value_rate" id="rate_10">
                                                                <label for="rate_10"></label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quality</td>
                                                            <td>
                                                                <input value="1" checked type="radio" name="quality_rate" id="rate_11">
                                                                <label for="rate_11"></label>
                                                            </td>
                                                            <td>
                                                                <input value="2" type="radio" name="quality_rate" id="rate_12">
                                                                <label for="rate_12"></label>
                                                            </td>
                                                            <td>
                                                                <input value="3" type="radio" name="quality_rate" id="rate_13">
                                                                <label for="rate_13"></label>
                                                            </td>
                                                            <td>
                                                                <input value="4" type="radio" name="quality_rate" id="rate_14">
                                                                <label for="rate_14"></label>
                                                            </td>
                                                            <td>
                                                                <input value="5" type="radio" name="quality_rate" id="rate_15">
                                                                <label for="rate_15"></label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <p class="subcaption">All fields are required.</p>
                                            <form method="post" id="form" class="type_2">
                                                {{csrf_field()}}
                                                <ul>
                                                    <li class="row">
                                                        <div class="col-sm-6">
                                                            <input value="{{$product1->id}}" type="hidden" name="product_id" id="product_id">
                                                            <label for="nickname">Nickname</label>
                                                            <input type="text" name="nickname" id="nickname">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            
                                                            <label for="summary">Summary of Your Review</label>
                                                            <input type="text" name="summary" id="summary">
                                                        </div>
                                                    </li>
                                                    <li class="row">
                                                        <div class="col-xs-12">
                                                            <label for="review_message">Review</label>
                                                            <textarea rows="5" name="review_message" id="review_message"></textarea>
                                                        </div>
                                                    </li>
                                                    <li class="row">
                                                        <div class="col-xs-12">
                                                            <button type="button" onclick="Review()" class="button_dark_grey middle_btn">Submit Review</button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>

                                    </div>

                                </section>
                            @endif

                </main>
        </div>
    </div>
</div>
<script>
    $('.orders').addClass('accSidebarActive');
function Review(){
    var product_form_data = new FormData($('#form')[0]);

    var price_rate = $('input[name=price_rate]:checked').val();
    var value_rate = $('input[name=value_rate]:checked').val();
    var quality_rate = $('input[name=quality_rate]:checked').val();

        product_form_data.append('price_rate',price_rate);
        product_form_data.append('value_rate',value_rate);
        product_form_data.append('quality_rate',quality_rate);
    $.ajax({
        url : '/addReview',
        type: "POST",
        data: product_form_data,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {
            $("#form")[0].reset();
            toastr.success('Review Store Successfully', 'Successfully Save');
            window.location.href = "/account/review";
        },
        error: function (data, errorThrown) {    
            var errorData = data.responseJSON.errors;
            $.each(errorData, function(i, obj) {
                toastr.error(obj[0]);
            });
        }
    }); 
}
    
</script>
@endsection
@section('extra-js')

@endsection