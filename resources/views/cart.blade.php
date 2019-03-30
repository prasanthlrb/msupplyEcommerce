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
function usecoupon(){
    var termsData = new FormData($('#discount_form')[0]);
    $.ajax({
        url : '/use-coupon',
        type: "POST",
        data: termsData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {
            alert(data);
            //var result = data.split('|');
            //$('.total_price').text(result[0]);
            //$('#open_shopping_cart').attr("data-amount",result[1]);
        }
    });
}

function couponCheck(){
    var checkUser = $('#userCheck').val();
    var couponcode = $('#couponcode').val();
    if(couponcode){
    if(checkUser){
        $.ajax({        
            url : '/check-coupon/'+couponcode,
            type: "GET",
            success: function(data)
            {
                console.log(data);
                if(data[0] == '0'){
                   
                    toastr.success(data[1]);
                   // $('.discount-next').after('<tr class="couponLabel"><td id="couponLabelTitle">Coupon Discount('+data.coupon_code+') </td>                <td id="couponLabelContent">'+data.amount+'</td>            </tr>');
                   getCartPage();
                }else{
                    toastr.error(data[1]);
                }
            }
        });
    }else{
        toastr.error('Please Login');
    }
}else{
    toastr.error('Please Enter Valid Coupon Code');
}
}
                
</script>

@endsection