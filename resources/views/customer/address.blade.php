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

							<h1>Managing Shipping Address</h1>
							<section class="theme_box">

								
								<!-- <a id="open_model" href="#" class="button_blue"><i class="fas fa-plus"></i> ADD A NEW ADDRESS</a> -->
								
<div style="padding-top:40px"></div>
										<div class="table_wrap">
		
											<!-- - - - - - - - - - - - - - Table v2 - - - - - - - - - - - - - - - - -->
		
											<table class="table">
		
												<tbody>
												@foreach($address as $address1)
													<tr>
														<td>
															@if($address1->address_type == 1)
															<a href="#" class="button_dark_grey">Home</a>
															@else 
															<a href="#" class="button_dark_grey">Work</a>
															@endif
															
															<a href="/account/editAddress/{{$address1->shipping}}" class="button_dark_grey pull-right">Edit</a>
																<div style="padding-bottom:10px"></div>
                              <h5>{{$address1->first_name}}  {{$address1->last_name}}</h5>
                            
                              <p>{{$address1->email}} - {{$address1->telephone}}</p>
                              <p>{{$address1->city}} - {{$address1->state}}</p>
                            
															<p>{{$address1->address}}</p>
														</td>
													</tr>
												@endforeach
												</tbody>
		
		
											</table>
		
											<!-- - - - - - - - - - - - - - End of table v2 - - - - - - - - - - - - - - - - -->
		
										
		
									</div>
								</section><!--/ .theme_box -->
								
                        </main>
                    </div>
                </div>
			</div>



@endsection

@section('extra-js')

<script>

	function Update(){
      var formData = new FormData($('#account_form')[0]);

        $.ajax({
          url : '/account/updateAddress',
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data)
          {
            console.log(data);
              $("#account_form")[0].reset();
               $('#account_model').modal('hide');
               $('.table').load(location.href+' .table');
               toastr.success('Data Update Successfully', 'Successfully Update');
		  },
		  error: function (data, errorThrown) {
          	var errorData = data.responseJSON.errors;
           		$.each(errorData, function(i, obj) {
              		toastr.error(obj[0]);
          		});
          }
      });
      
    }

    function Edit(id){
      $.ajax({
        url : '/account/editAddress/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          console.log(data);
          $('#myModalLabel8').text('Update Info');
          $('#save').text('Save Change');
          $('input[name=first_name]').val(data.first_name);
          $('input[name=last_name]').val(data.last_name);
          $('input[name=email]').val(data.email);
          $('input[name=telephone]').val(data.telephone);
		  $('textarea[name=address]').val(data.address);
		  $('input[name=city]').val(data.city);
		  $('select[name=state]').val(data.state);
		  $('input[name=postal_code]').val(data.zip);
		  $('select[name=country]').val(data.country);
          $('input[name=id]').val(data.id);
          $('#account_model').modal('show');
          action_type = 2;
        }
      });
    }



</script>
<script>
	$('.address').addClass('accSidebarActive');
</script>
@endsection