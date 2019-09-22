@extends('layout.app')
@section('extra-css')
    <link rel="stylesheet" href="/js/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="/js/fancybox/source/helpers/jquery.fancybox-thumbs.css">
<style>
p.productdesc{
	width:60%;
}
.single_product_description {
    position: relative;
    padding-top: 10px;
    overflow: hidden;
}
.hide-details{
	display: none;
}
</style>
@endsection
@section('content')

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="index.html">Home</a></li>
						<li><a href="/category/1">Tiles</a></li>
					<li><a href="/category/{{$subCategoty->id}}">{{$subCategoty->category_name}}</a></li>
	
						<li>{{$product1->product_name}}</li>
					<input type="hidden" id="product_id" value="{{$product1->id}}">
					</ul>

					<!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

					<div class="row">

						<main class="col-md-8 col-sm-7">

							<!-- - - - - - - - - - - - - - Product images & description - - - - - - - - - - - - - - - - -->

							<section class="section_offset">

								<div class="clearfix">

									<!-- - - - - - - - - - - - - - Product image column - - - - - - - - - - - - - - - - -->

									<div class="single_product">

										<!-- - - - - - - - - - - - - - Image preview container - - - - - - - - - - - - - - - - -->

										<div class="image_preview_container">

										<img id="img_zoom" data-zoom-image="http://www.kagtech.net/KAGAPP/Partsupload/{{$product1->product_image}}" src="http://www.kagtech.net/KAGAPP/Partsupload/{{$product1->product_image}}" alt="">

											<button class="button_grey_2 icon_btn middle_btn open_qv"><i class="icon-resize-full-6"></i></button>

										</div><!--/ .image_preview_container-->

										<!-- - - - - - - - - - - - - - End of image preview container - - - - - - - - - - - - - - - - -->


										<!-- - - - - - - - - - - - - - Share - - - - - - - - - - - - - - - - -->
										
										<div class="v_centered">

											<span class="title">Share this:</span>

											<div class="addthis_widget_container">
												<!-- AddThis Button BEGIN -->
												<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
												<a class="addthis_button_preferred_1"></a>
												<a class="addthis_button_preferred_2"></a>
												<a class="addthis_button_preferred_3"></a>
												<a class="addthis_button_preferred_4"></a>
												<a class="addthis_button_compact"></a>
												<a class="addthis_counter addthis_bubble_style"></a>
												</div>
												<!-- AddThis Button END -->
											</div>
											
										</div>
										
										<!-- - - - - - - - - - - - - - End of share - - - - - - - - - - - - - - - - -->

									</div>

									<!-- - - - - - - - - - - - - - End of product image column - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Product description column - - - - - - - - - - - - - - - - -->

									<div class="single_product_description">

									<h3 class="offset_title"><a href="#">{{$product1->product_name}}</a></h3>

									
 <div class="description_section">

                                <table class="product_info">

                                    <tbody>

                                        <!-- <tr>

                                            <td>Vendor: </td>


                                        </tr> -->

                                        <tr>
                                        @if($stock->stocks !="" && $stock->stocks  !=0)
                                            <td>Availability: </td>
                                            <td><span class="in_stock">in stock</span> {{$stock->stocks}} item(s)</td>
                                        @else
                                            <td>Availability: </td>
                                            <td><span style="color:red;">Out of Stock</span></td>
                                        @endif

                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                            <hr>
									

                                    <p class="product_price">Rs : <b class="theme_color">{{$product1->sales_price}}</b></p>


								   <ul class="specifications">
													   
                                                       <li>
														   <div class="row">
															   <div class="col-md-6 col-sm-6">
																   Brand 
															   </div>
															   <div class="col-md-6 col-sm-6">
																: KAG
															   </div>
														   </div>
														  </li>
                                                       <li>
														   <div class="row">
															   <div class="col-md-6 col-sm-6">
																   Size 
															   </div>
															   <div class="col-md-6 col-sm-6">
																: {{$product1->width}}
															   </div>
														   </div>
														  </li>
                                                       <li>
														   <div class="row">
															   <div class="col-md-6 col-sm-6">
																   Weight 
															   </div>
															   <div class="col-md-6 col-sm-6">
																: {{$product1->weight}}
															   </div>
														   </div>
														  </li>
                                                       <li>
														   <div class="row">
															   <div class="col-md-6 col-sm-6">
																   Total Coverage in Sqft 
															   </div>
															   <input type="hidden" id="sqft" value="{{$product1->length}}">
															   <div class="col-md-6 col-sm-6">
																: {{$product1->length}}
															   </div>
														   </div>
														  </li>
                                                       <li>
														   <div class="row">
															   <div class="col-md-6 col-sm-6">
																   No of Pieces 
															   </div>
															   <div class="col-md-6 col-sm-6">
																: {{$product1->items}}
																<input type="hidden" id="noitem" value=" {{$product1->items}}">
															   </div>
														   </div>
														  </li>
                                                       <li>
														   <div class="row">
															   <div class="col-md-6 col-sm-6">
																   Description 
															   </div>
															   <div class="col-md-6 col-sm-6">
																: {{$product1->product_description}}
															   </div>
														   </div>
														  </li>


                                                
                                                   </ul>
		

										<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
							<br>
							<form id="tilesFormProduct" method="post">
							{{ csrf_field() }}
								<input type="hidden" name="product_name" id="product_name" value="{{$product1->product_name}}">
								<input type="hidden" name="product_id" id="product_id" value="{{$product1->id}}">
								<input type="hidden" name="stocks" id="stocks" value="{{$stock->stocks}}">
								<input type="hidden" name="sales_price" id="sales_price" value="{{$product1->sales_price}}">
					  <div class="description_section_2 v_centered">

                                <span class="title">Qty:</span>
                              

                                <div class="qty min clearfix">
                                    <button type="button"  class="theme_button" type="button" data-direction="minus">-</button>
                                    <input type="text" name="button_qty" id="button_qty" value="1">
                                    <button type="button"  class="theme_button" type="button" data-direction="plus">+</button>

                                </div>

							</div>
								<div class="buttons_row">

											<button type="button" onclick="tileAddtoCart()" class="button_blue middle_btn">Add to Cart</button>

											<button type="button" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>

											<button type="button" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

										</div>
									</form>
										<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

									</div>

									<!-- - - - - - - - - - - - - - End of product description column - - - - - - - - - - - - - - - - -->

								</div>

							</section><!--/ .section_offset -->

							<!-- - - - - - - - - - - - - - End of product images & description - - - - - - - - - - - - - - - - -->
						

						</main><!--/ [col]-->

						<aside class="col-md-4 col-sm-5">

							<!-- - - - - - - - - - - - - - Seller Information - - - - - - - - - - - - - - - - -->

							<section class="section_offset">

								<h3> Calculate your required Tiles</h3>

								<div class="theme_box">
								<p class="seller_category">Enter the Length(ft) and Breadth(ft) of the area you want to Tile.</p>
									<br>
								

									<div class="v_centered">

									<div class="col-xs-12">
                                        {{-- <div style="float:right">

                                            <button type="button" class="button_blue mini_btn">Add </button>
                                        </div> --}}
										<div class="row" style="padding-top:30px">
											<div class="col-md-4">
												<label for="input_2">Length(ft)</label>
													<div class="form_el">
														<input type="text" name="length" id="length">
													</div>
											</div>
											<div class="col-md-1">
												<p style="text-align:center;margin-top: 30px;">X</p>
											</div>
											<div class="col-md-4">
												<label for="input_2">Breadth(ft)</label>
													<div class="form_el">
														<input type="text" name="breadth" id="breadth">
													</div>
                                            </div>
                                            {{-- <div class="col-md-2" style="margin-top:25px">
                                                <button type="button" class="button_blue mini_btn">Remove</button>
                                            </div> --}}
										</div>
										<br>
													
																<div class="after-calculatore" style="display:none">

														<p style="text-align: center;font-weight: 600">Tile Caculator Result:</p>	
														<ul class="specifications">
													   
                                                       <li>
														   <div class="row">
															   <div class="col-md-6">
																   Total Area :	 
															   </div>
															   <div class="col-md-6">
																: <span id="total-area"></span>
															   </div>
														   </div>
														   
														  </li>
                                                       <li>
														   <div class="row">
															   <div class="col-md-6">
																   No of Boxes Required 
															   </div>
															   <div class="col-md-6">
																: <span id="noofboxes"></span>
															   </div>
														   </div>

														  </li>
                                                       <li>
														   <div class="row">
															   <div class="col-md-6">
																   No of Tiles 
															   </div>
															   <div class="col-md-6">
																: <span id="nooftiles"></span>
															   </div>
														   </div>

														  </li>
                                                     
														</ul>

													</div>		

										</div>

								

									</div>

								</div><!--/ .theme_box -->

								<footer class="bottom_box" style="text-align:center">
									
									<a href="#" class="button_grey middle_btn" id="calculate">CALCULATE</a>

								</footer>

							</section>

						</aside><!--/ [col]-->

					</div><!--/ .row-->

					<div class="row">

						{{-- <div class="more-detail-btn" style="margin-top:100px;margin-bottom:100px;text-align:center"> 
							<button class="button_blue middle_btn" style="position:absolute;right:40%" id="more-detail-btn">
								More Details About this Product
								
							</button>
							<img src="{{asset('/riva/riva0.png')}}" alt="" width="75%" style="max-height:100px;over-flow:hidden">
						</div> --}}

						{{-- <div style="text-align:center;margin-top:100px;margin-bottom:100px" class="more-tiles-details hide-details">
							<img src="{{asset('/riva/riva0.png')}}" alt="" width="75%">
							<img src="{{asset('/riva/riva1.png')}}" alt="" width="75%">
							<img src="{{asset('/riva/riva2.png')}}" alt="" width="75%">
							<img src="{{asset('/riva/riva3.png')}}" alt="" width="75%">
							<img src="{{asset('/riva/riva4.png')}}" alt="" width="75%">
						</div> --}}
							
						

							<!-- - - - - - - - - - - - - - Related products - - - - - - - - - - - - - - - - -->
							@if(count($relatedProducts) >0)
							<section class="section_offset">

								<h3 class="offset_title">Related Products</h3>

								<div class="owl_carousel related_products">

									@foreach($relatedProducts as $relate)
									<div class="product_item">

										<!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

										<div class="image_wrap">

										<img src="http://www.kagtech.net/KAGAPP/Partsupload/{{$relate->product_image}}" alt="">

											<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

											<div class="actions_wrap">
												

												<div class="centered_buttons">

													<a href="#" class="button_dark_grey quick_view" data-modal-url="/quick-view-tiles/{{$relate->id}}">Quick View</a>

							

												</div><!--/ .centered_buttons -->

												<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

												<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

											</div><!--/ .actions_wrap-->
											
											<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

										</div><!--/. image_wrap-->

										<!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->


										<!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

										<div class="description">

										<a href="/product/{{$relate->id}}">{{$relate->product_name}}</a>

										

										</div>

										<!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

									</div><!--/ .product_item-->
									@endforeach
									
									
									
									<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

								</div><!--/ .owl_carousel -->

							</section><!--/ .section_offset -->
							@endif
							<!-- - - - - - - - - - - - - - End of related products - - - - - - - - - - - - - - - - -->

					</div>

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
			<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
@endsection
			
@section('extra-js')

<!-- Include Libs & Plugins
    ============================================ -->
    <script src="/js/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="/js/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script src="/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script>
		var lit=0;
		var colors_id =0;
function setLitre(lits){
lit = lits;
$('.litBtn').each(function(index){
	$(this).addClass("button_grey");
	$(this).removeClass("button_blue");
});
$('#lit'+lit).addClass("button_blue");
getPrice();
}

$('#more-detail-btn').on('click',function(){
	$('.more-detail-btn').addClass('hide-details');
	$('.more-tiles-details').removeClass('hide-details');
})

function addCart(id){
    var qty  = $('#button_qty').val();
    var haveAcolor = $('#haveAcolor').val()
    var optionAvailable = $('#optionAvailable').val();

    //Both Color and Option Available
    if(haveAcolor == '1' && optionAvailable){
        //get Form Data
        var formData = new FormData($('#optionForm')[0]);
        let inputColor = $('#inputColor').val();
        if(inputColor){
            try{
        formData.append('product_id',id);
        formData.append('colors',inputColor);
        formData.append('qty',qty);
    $.ajax({
    url : '/set-cart-item',
         type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
    success: function(data)
    {
        console.log(data);
    },error: function (error) {
           console.log(error);
        }
    });
        }catch(err){
        console.log(err)
        }
        }else{
            getColorModal();
        }
        //only Have a Color Data
    }else if(haveAcolor == '1'){
        let inputColor = $('#inputColor').val();
        if(inputColor){
            $.ajax({
            url : '/set-cart-item',
            type: "GET",
            data: {color:inputColor,id:id,qty:qty},
    success: function(data)
    {
        console.log(data);
    },error: function (error) {
           console.log(error);
        }
    });
        }else{
            getColorModal();
        }
        //only have a option form Data
    }
    else if(optionAvailable){
         //get Data Form
        var formData = new FormData($('#optionForm')[0]);
        formData.append('product_id',id);
        formData.append('qty',qty);
        $.ajax({
        url : '/set-cart-item',
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {
        console.log(data);
        },error: function (error) {
           console.log(error);
        }
        });
    }
    //both color and option not have
    else{

        setCart(id,qty);
    }


    }
    //end of function
        function getColorModal(id){
            $.arcticmodal({
                        url : '/get-color-modal/'+id
                    });
        }
        function getColors(data){
			$('.arcticmodal-close').trigger('click');
			$('#colorButtonModule').css('background-color',data.shade_code)
            $('#colorButtonModule').text(data.code_name)
			//console.log(data);
			colors_id = data.id;
			getPrice();
        }
		function getPrice(){
		
			console.log(lit)
			console.log(colors_id)
if(lit !=0 && colors_id !=0){
	let product_id = $('#product_id').val();
	console.log(product_id)
	     $.ajax({
				url:'/selected-color',
                method:'GET',
				data:{product_id:product_id,lit:lit,colors_id:colors_id},
                success:function(result){
                    console.log(result);
                    //$('#inputColor').remove();
                    $(".product_price .theme_color").text("Rs : "+result.price);
                    //$('#colorButtonModule').append('<input type="hidden" name="inputColor" id="inputColor" value="'+result.id+'">')
                }
            });
}
		}
        function checkOrderLimit(data){
            var button_qty = $('#button_qty').val();
            if(button_qty <= button_qty){

                toastr.error('is Maximum of '+data, 'Your Order Limit QTY');
                setTimeout(()=>{
                    $('#button_qty').val(data);
                },0)
            }
        }

		$('#calculate').on('click', function(){
			let length = $('#length').val();
			let breadth = $('#breadth').val();
			let sqft = $('#sqft').val();
			let noitem = $('#noitem').val();
			if(breadth !='' && length != ''){
			let total = parseInt(length * breadth / sqft);
			let totalnoitem = parseInt(noitem) * total;
			$('.after-calculatore').css("display","block");
			$('#total-area').text(length * breadth)
			$('#noofboxes').text(Math.ceil(total))
			$('#nooftiles').text(Math.ceil(totalnoitem))
			}else{
				toastr.error("breadth and Length", "Field is required")
			}
			// alert(total);
		});
		function tileAddtoCart(){
			var formData = new FormData($('#tilesFormProduct')[0]);
			let stock = parseFloat($('#stocks').val());
			let qty =  parseFloat($('#button_qty').val());
			if(stock > qty){
        		$.ajax({
                url : '/tilesAddtoCart',
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(data)
                {                
                    //$("#form")[0].reset();
					console.log(data)
					CartMenuUpdate();
                },error: function (data) {
                toastr.error("Not Available");
                
              }
            });
			}else{
				 toastr.error(" Available Stock","Please Enter Less Rather than");
			}
		}
    </script>
@endsection