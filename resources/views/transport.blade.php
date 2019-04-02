@extends('layout.app')
@section('extra-css')
<style>
.hide_transport{
display: none !important;
}
.mapboxgl-ctrl-geocoder.mapboxgl-ctrl {
    width: 100%;
    margin-bottom: 10px;
}
#map {height:550px ;width:660px; }
@media screen and (max-width: 480px) {
    #map {
    height: 550px;
    width: 322px;
}
}
@media screen and (max-width: 360px) {
    #map {
    height: 350px;
    width: 252px;
}
}
</style>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.css' rel='stylesheet' />
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.0.0/mapbox-gl-draw.css' type='text/css'/>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />
@endsection

@section('content')
<div class="secondary_page_wrapper">

    <div class="container">

        
					<section class="section_offset">

						<h3 class="offset_title">1. Checkout </h3>

						<div class="relative">

							<a class="icon_btn button_dark_grey edit_button" href="#"><i class="icon-pencil"></i></a>


							<div class="table_layout">

								<div class="table_row">

									<div class="table_cell">

										<section>

											<h4>Select Transport </h4>

										

											<form>

												<ul>
													
													<li>

														<input type="radio" checked name="radio_2" id="radio_button_1" value="0" class="select_transport">
														<label for="radio_button_1">KAS Earth Mover (recommended) </label>

													</li>

													<li>

														<input type="radio" name="radio_2" id="radio_button_2" value="1" class="select_transport">
														<label for="radio_button_2">My own Transport</label>

													</li>

                                                </ul>
                                                
                                              
											</form>

											

										</section>

									</div><!--/ .table_cell -->

									<div class="table_cell">

										<section id="transport_vehicle">

											<h4>Select Transport Vehicle</h4>

											<div class="table_wrap">

                                                <table class="table_type_1 shopping_cart_table">
                    
                                                    <thead>
                    
                                                        <tr>
                                                            <th class="product_image_col">Vehicle</th>
                                                            <th>Vehicle Name</th>
                                                            <th>Per Km Rate</th>
                                                            <th>Other</th>
                                                            <th>Action</th>
                                                     
                                                        </tr>
                    
                                                    </thead>
                    
                                                    <tbody>
                                                        @if(isset($transport))
                                                        @foreach($transport as $row)
                                                        <tr>
                    
                                                            <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
                                                                
                                                            <td class="product_image_col" data-title="Product Image">
                                                                
                                                            <a href="#"><img src="transport/{{$row->vehicle_image}}" alt=""></a>
                    
                                                            </td>
                    
                                                            <!-- - - - - - - - - - - - - - End of product Image - - - - - - - - - - - - - - - - -->
                    
                                                            <!-- - - - - - - - - - - - - - Product name - - - - - - - - - - - - - - - - -->
                    
                                                            <td data-title="Product Name">
                    
                                                            <a href="#" class="product_title">{{$row->vehicle_name}}</a>
                    
                                                               
                    
                                                            </td>
                    
                                                            <!-- - - - - - - - - - - - - - End of product name - - - - - - - - - - - - - - - - -->
                    
                    
                                                            <td class="total" data-title="Total">
                    
                                                               {{$row->price}}
                    
                                                            </td>
                                                            <td class="total" data-title="Total">
                    
                                                              {{$row->other}}
                    
                                                            </td>
                                                            <td>
                    
                                                                <button type="button"  data-modal-url="/modals/transport.php" class="button_blue">Select</button>
                    
                                                            </td>
                    
                                                            <!-- - - - - - - - - - - - - - End of total - - - - - - - - - - - - - - - - -->
                    
                                                            <!-- - - - - - - - - - - - - - Action - - - - - - - - - - - - - - - - -->
                    
                                                           
                                                            <!-- - - - - - - - - - - - - - End of action - - - - - - - - - - - - - - - - -->
                    
                                                        </tr>
                                                        @endforeach
                                                        @endif
                    
                                                    </tbody>
                    
                                                </table>
                    
                                            </div><!--/ .table_wrap -->

										

										</section>

									</div><!--/ .table_cell -->

								</div><!--/ .table_row -->

								<div class="table_row">

									<div class="table_cell">

										<a href="#" class="button_blue middle_btn hide_transport" id="own_tran_button">Continue</a>

									</div><!--/ .table_cell -->

									<div class="table_cell">

										<div class="on_the_sides login_with">

											<div class="right_side v_centered">

												<button type="submit" form="login_form" class="button_blue middle_btn hide_transport">Continue</button>

											

											</div>

										</div>

									</div><!--/ .table_cell -->

								</div><!--/ .table_row -->

							</div><!--/ .table_layout -->

						</div><!--/ .relative -->

					</section><!--/ .section_offset -->
      


    </div>
</div>



@endsection
@section('extra-js')
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.js'></script>
<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.0.0/mapbox-gl-draw.js'></script>
<script type="text/javascript">

    $(document).ready(function(){
        $('.select_transport').click(function(){
            var value = $(this).val();
            if(value != 0){
                $('#transport_vehicle').addClass('hide_transport');
                $('#own_tran_button').removeClass('hide_transport');
            }else{
                $('#transport_vehicle').removeClass('hide_transport');
                $('#own_tran_button').addClass('hide_transport');
            }
        });
    });


</script>
@endsection