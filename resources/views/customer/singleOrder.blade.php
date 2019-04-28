@extends('layout.app')
@section('content')

<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

<div class="secondary_page_wrapper">

    <div class="container">

        <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

        <ul class="breadcrumbs">

            <li><a href="index.html">Home</a></li>
            <li><a href="/account/orders">Orders</a></li>
            <li>manage address</li>

        </ul>

        <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

        <div class="row">

            @include('include.accountSidebar')
            <main class="col-md-9 col-sm-8">
              
                    <h1>Order #{{$order->id}} - Status :
                            @if($order->order_status == 0)
                            Pending
                            @elseif($order->order_status == 1)
                        
                            Processing
                            @elseif($order->order_status == 2)
                            Shipping
                            @elseif($order->order_status == 3)
                            Delivered
                            @elseif($order->order_status == 4)
                            on-hold
                            @elseif($order->order_status == 5)
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

                                        <td><a href="#">{{$order->id}}</a></td>
                                    </tr>
                                    <tr>
                                        <th>Order Date</th>
                                        <td>{{date('Y-m-d', strtotime($order->created_at))}}</td>
                                    </tr>

                                    <tr>
                                        <th>Product Status</th>
                                        <td>@if($order->order_status == 0)
                                                Pending
                                                @elseif($order->order_status == 1)
                                            
                                                Processing
                                                @elseif($order->order_status == 2)
                                                Shipping
                                                @elseif($order->order_status == 3)
                                                Delivered
                                                @elseif($order->order_status == 4)
                                                on-hold
                                                @elseif($order->order_status == 5)
                                                Failed
                                                @endif</td>
                                    </tr>

                                    <!-- <tr>
                                        <th>Shipment</th>
                                        <td>United Parcel Service - Worldwide Expedited</td>
                                    </tr> -->

                                    <tr>
                                        
                                        <th>Payment</th>

                                        <td>@if($order->payment_type == '1')
                                                Cash On Delivery
                                                @else
                                                Online Payment
												@endif</td>

                                    </tr>

                                    <tr>

                                        <th>Total</th>

                                        <td class="total">₹ {{$order->total_amount}}</td>

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
                                              
                                                    {{$order_item->product_name}}
                                                                                   
                                            </a>
                                            <!-- <ul class="sc_product_info">
                                                <li>Size: Big</li>
                                                <li>Color: Red</li>
                                            </ul> -->
                                        </td>
                                        <td data-title="Price" class="subtotal">₹ {{$order_item->sales_price}}</td>
                                        <td data-title="Quantity">{{$order_item->qty}}</td>
                                        <td data-title="Total" class="total">₹ {{$order_item->sales_price * $order_item->qty}}</td>
                                    </tr>
                                   
                                @endforeach
                                </tbody>

                                <tfoot>
                                        <tr>
                                        
                                                <td colspan="3" class="bold">Tax ({{$order_item->tax_type}}) </td>
                                                <td class="total">₹ {{$order_item->tax}}</td>
        
                                            </tr>

                                   

                                   

                                    <tr>
                                        
                                        <td colspan="3" class="grandtotal">Grand Total</td>
                                        <td class="grandtotal">₹ {{$order_item->total_price}}</td>

                                    </tr>

                                </tfoot>

                            </table>

                        </div><!--/ .table_wrap -->

                        <!-- <footer class="bottom_box">

                            <a href="shop_orders_list.html" class="button_grey middle_btn">Back to My Orders</a>

                        </footer> -->

                    </section>

                    <!-- - - - - - - - - - - - - - End of items ordered - - - - - - - - - - - - - - - - -->

                           

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