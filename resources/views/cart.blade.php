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
            $('.couponLabel').addClass('couponLabelHide');
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
        }
    });
}
                
</script>

@endsection