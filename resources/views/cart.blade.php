@extends('layout.app')
@section('extra-css')

<style>
  
</style>
@endsection
@section('content')


<div class="secondary_page_wrapper" id="shopping_table">

    
                     


                   

</div><!--/ .page_wrapper-->




    
@endsection

@section('extra-js')
<script>
    
$('.cart_menu').addClass('current');
$(document).ready(function(){
    $.ajax({        
        url : '/cart-data',
        type: "GET",
        success: function(data)
        {
            $('#shopping_table').html(data);
            $('.couponLabel').addClass('couponLabelHide');
        }
    });
});
function getCartPage(){
    $.ajax({        
        url : '/cart-data',
        type: "GET",
        success: function(data)
        {
            $('#shopping_table').html(data);
        }
    });
}
function updateCart(id){
var cartQty = $('#cartQty'+id).val();
 $.ajax({        
        url : '/cart-update-value/'+id+'/'+cartQty,
        type: "GET",
        success: function(data)
        {
            getCartPage();
            CartMenuUpdate();
        }
    });
}
function cleanCart(){
	$.ajax({        
		url : '/clean-cart',
		type: "GET",
		success: function(data)
		{
			   
			getCartPage();
            CartMenuUpdate();
		   
		}
	});
}
function removeItemCart(id){
	var route = $('#routes').val();
	$.ajax({        
        url : '/remove-cart/'+id,
        type: "GET",
        success: function(data)
        {
			//if(route == 'cart'){
			
			//}
            getCartPage();
			CartMenuUpdate();
			
        }
   });
}         
</script>

@endsection