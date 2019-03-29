@extends('layout.app')
@section('content')

<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="index.html">Home</a></li>
						<li>My Account</li>

					</ul>

					<!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

					<div class="row">

						@include('include.accountSidebar')

						<main class="col-md-9 col-sm-8">

							<h1>My Profile</h1>

							@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

							<section class="theme_box table">

								<h4>Personal Information</h4>

								<p>Name : {{Auth::user()->name}}<br>
								<!-- <a href="#" class="mail_to">male</a> -->
								</p>
								<p>Email : <a href="#" class="mail_to">{{Auth::user()->email}}</a></p>

								<p>Mobile Number : <a href="#" class="mail_to">{{Auth::user()->phone}}</a></p>

							</section>
							
							<section class="theme_box">
								<div class="buttons_row">
									<a onclick="Edit({{Auth::user()->id}})" href="#" class="button_grey middle_btn">Edit Account Information</a>
									<a href="#" id="open_model" class="button_grey middle_btn">Change Password</a>
								</div>
							</section>

						</main><!--/ [col]-->

					</div><!--/ .row-->

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
			<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->


 <div class="modal fade text-left" id="password_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary white">
		  <h4 class="modal-title white" id="myModalLabel8">Change Password</h4>

			<button data-dismiss="modal" class="close arcticmodal-close"></button>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        
        <div class="modal-body">
		<form id="password_form" action="#" method="post" class="type_2">
		{{ csrf_field() }}
		<input type="hidden" value="{{Auth::user()->id}}" name="id" id="id">
			<ul> 
				<li class="row">
					<div class="col-sm-12">
						<label class="required">New Password</label>
						<input  type="password" name="password" id="password">
					</div>
				</li>
				<li class="row">
					<div class="col-sm-12">
						<label class="required">Re Enter Password</label>
						<input  type="password" name="password_confirmation" id="password_confirmation">
					</div>
				</li>
			</ul>
		</form>
        </div>
        <div class="modal-footer">
			<footer class="on_the_sides">
				<div class="pull-left">
					<button data-dismiss="modal" type="button" class="button_blue middle_btn">Close</button>
				</div>
				<div class="right_side">
					<button onclick="changePass()" type="button" class="button_blue middle_btn">Change Password</button>
				</div>
			</footer>
        </div>
      </div>
    </div>
  </div>




 <div class="modal fade text-left" id="account_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary white">
		  <h4 class="modal-title white" id="myModalLabel8">Create Account</h4>

<button class="close arcticmodal-close"></button>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        
        <div class="modal-body">
		<form id="account_form" action="#" method="post" class="type_2">
		{{ csrf_field() }}
		<input type="hidden" name="id" id="id">
			<ul> 
				<li class="row">
					<div class="col-sm-12">
						<label for="first_name" class="required">Name</label>
						<input  type="text" name="name" id="name">
					</div>
				</li>
				<li class="row">
					<div class="col-sm-12">
						<label for="first_name" class="required">Phone</label>
						<input  type="text" name="phone" id="phone">
					</div>
				</li>
				<li class="row">
					<div class="col-sm-12">
						<label for="first_name" class="required">E-Mail ID</label>
						<input  type="text" name="email" id="email">
					</div>
				</li>
			</ul>
		</form>
        </div>
        <div class="modal-footer">
			<footer class="on_the_sides">
				<div class="pull-left">
					<button data-dismiss="modal" type="button" class="button_blue middle_btn">Close</button>
				</div>
				<div class="right_side">
					<button onclick="Update()" id="save" type="button" class="button_blue middle_btn">Save</button>
				</div>
			</footer>
        </div>
      </div>
    </div>
  </div>



<style>

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}



.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000000;
  text-shadow: 0 1px 0 #ffffff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
  color: #000000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.modal-open {
  overflow: hidden;
}
.modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  -o-transform: translate(0, -25%);
  transform: translate(0, -25%);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #ffffff;
  border: 1px solid #999999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  outline: 0;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000000;
}
.modal-backdrop.fade {
  opacity: 0;
  filter: alpha(opacity=0);
}
.modal-backdrop.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
  min-height: 16.42857143px;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
.clickable {
  cursor:pointer;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.clearfix:before,
.clearfix:after,
.modal-footer:before,
.modal-footer:after {
  content: " ";
  display: table;
}
.clearfix:after,
.modal-footer:after {
  clear: both;
}
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
}
.affix {
  position: fixed;
}
</style>
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/toastr.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css')}}">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="{{ asset('app-assets/js/scripts/extensions/toastr.js')}}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js')}}" type="text/javascript"></script>
<script>
	$('.dashboard').addClass('accSidebarActive');

$('#open_model').click(function(){
    $('#password_model').modal('show');
    action_type = 1;
    $('#myModalLabel8').text('Change Password');
})


	function changePass(){
      var formData = new FormData($('#password_form')[0]);

        $.ajax({
          url : '/account/userchangePassword',
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data)
          {
            console.log(data);
              	$("#password_form")[0].reset();
            	$('#password_model').modal('hide');
               //$('.zero-configuration').load(location.href+' .zero-configuration');
               toastr.success('Change Password Successfully', 'Successfully Update');
		  },
		  error: function (data, errorThrown) {
          	var errorData = data.responseJSON.errors;
           		$.each(errorData, function(i, obj) {
              		toastr.error(obj[0]);
          		});
          }
      });
      
	}
	
	function Update(){
      var formData = new FormData($('#account_form')[0]);

        $.ajax({
          url : '/account/updateCustomer',
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
        url : '/account/editCustomer/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          $('#myModalLabel8').text('Update Info');
          $('#save').text('Save Change');
          $('input[name=name]').val(data.name);
          $('input[name=email]').val(data.email);
          $('input[name=phone]').val(data.phone);
          $('input[name=id]').val(data.id);
          $('#account_model').modal('show');
          action_type = 2;
        }
      });
    }



</script>

@endsection