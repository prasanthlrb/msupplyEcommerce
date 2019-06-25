<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\product;
//Route::get('/order-email','AccountController@orderMail');
Route::get('/order-email',function(){
    return view('email.test');
});

Route::get('/event', 'PayController@index');
 Route::post('/pay', 'PayController@pay');
 Route::get('/pay-success', 'PayController@success');

Route::get('/','pageController@home');
//pages route
Route::get('/about','pageController@about');
Route::get('/terms','pageController@terms');
Route::get('/privacy','pageController@privacy');
Route::get('/shipping_details','pageController@shipping_details');
Route::get('/faq','pageController@faq');
Route::get('/contact','pageController@contact');
Route::get('/category-tree','pageController@categoryTree');
Route::get('/category/{id}','categoryController@categoryProduct');
Route::get('/product/{id}','categoryController@getProduct');
Route::get('/quick-view/{id}','pageController@quickModel');
Route::get('/product-advance-filter/{product}/{attr}/{terms}','categoryController@advanceFilter');

Route::get('/selected-color/{id}','pageController@selectedColor');
Route::get('/get-colors','pageController@getColors');
Route::get('/get-search-color','pageController@getSearchColors');
Route::get('/get-color/{id}','pageController@getColorById');
Route::get('/get-category','pageController@getColorCategory');
Route::get('/get-color-modal','pageController@colorModals');



//cart Page
Route::post('/set-cart-item','cartController@postCartItem');
Route::get('/set-cart-item','cartController@getCartItem');

//Route::get('/wishlist','pageController@wishlist');
// Route::get('/add-wishlist/{id}','pageController@addWishlist');
// Route::get('/remove-wish/{id}','pageController@removewish');
Route::get('/transports','AccountController@transport');
Route::get('/own-transport','AccountController@ownTransport');
Route::get('//edit-transport','AccountController@editTransport');
Route::get('/get-transport-data/{id}','pageController@getTransportData');
Route::get('/removewish/{id}','AccountController@removewish');
Route::get('/filter-brand/{id}','categoryController@filterBrand');
//product search
Route::post('/filter','pageController@filter');

//mail
Route::post('/contact-mail','pageController@contactMail');

// Route::get('/sms-demo', function () {
//    try{
// $requestParams = array(
//     'route' => '2',
//     'api-token' => '25p83e9*wu.0szd_4),7hyaokirlfbnvgcxj1mqt',
//     'sender' => 'KASMDU',
//     'numbers' => '7010384622',
//     'message' => 'Your Checkout Verification code is'
// );
// //merge API url and parameters
// $apiUrl = "http://smspro.co.in/httpapi/v1/sendsms?";
// foreach($requestParams as $key => $val){
//     $apiUrl .= $key.'='.urlencode($val).'&';
// }
// $apiUrl = rtrim($apiUrl, "&");

// //API call
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $apiUrl);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_exec($ch);
// curl_close($ch);
//    }
//    catch(Exception  $e){
//        echo $e->getMessage();
//    }
// });

Route::get('/transport-popup/{id}','pageController@transportPopup');
Auth::routes();
Auth::routes(['verify' => true]);
Route::group(['prefix' => 'admin'],function(){


    // Route::get('/login', function () {
    //     return view('admin/login');
    // })->name('admin.login');
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\LoginController@login');
    Route::post('/logout', 'Admin\LoginController@logout')->name('admin.logout');


    Route::get('/dashboard','userController@dashboard');
    Route::get('/user','userController@user');
    Route::get('/edit-employee/{id}','userController@editEmployee');
    Route::get('/delete-employee/{id}','userController@deleteEmployee');
    Route::post('/employee-save','userController@saveEmployee');
    Route::post('/employee-update','userController@updateEmployee');
//brands
Route::get('/brand','productController@viewBrand');
Route::get('/edit_brand/{id}','productController@editBrand');
Route::get('/delete_brand/{id}','productController@deleteBrand');
Route::post('/add-brand','productController@brandStore');
Route::post('/update-brand','productController@brandUpdate');

// Attribute Management
Route::get('/attribute','productController@viewAttribute');
Route::post('/attributeSave','productController@attributeSave');
Route::post('/attributeUpdate','productController@attributeUpdate');
Route::get('/attributeEdit/{id}','productController@attributeEdit');
Route::get('/attributeDelete/{id}','productController@attributeDelete');

// Terms Management
Route::get('/terms/{id}','productController@viewTerms');
Route::post('/termsSave','productController@termsSave');
Route::post('/termsUpdate','productController@termsUpdate');
Route::get('/termsEdit/{id}','productController@termsEdit');
Route::get('/termsDelete/{id}','productController@termsDelete');


// Product Group Management
Route::get('/product-group','productController@productGroup');
Route::post('/saveGroup','productController@saveGroup');
Route::post('/updateGroup','productController@updateGroup');
Route::get('/editGroup/{id}','productController@editGroup');
Route::get('/deleteGroup/{id}','productController@deleteGroup');

// Category Management
//Route::get('/category','productController@viewCategory');
Route::get('/category/{id}','productController@viewCategoryId');
Route::get('/edit-category/{id}','productController@EditCategory');
Route::get('/delete-category/{id}','productController@DeleteCategory');
Route::post('/category-save','productController@CategorySave');
Route::post('/category-update','productController@CategoryUpdate');

//colors
Route::get('/colors-category','productController@viewColorCategory');
Route::get('/load-color-category','productController@loadColorCategory');
Route::get('/load-color/{id}','productController@loadColor');
Route::post('add-color-category','productController@saveColorCategory');
Route::post('update-color-category','productController@updateColorCategory');
Route::get('/edit_color_category/{id}','productController@editColorsCategory');
Route::get('/delete_color_category/{id}','productController@deleteColorsCategory');
Route::get('/colors/{id}','productController@viewColors');
Route::get('/edit-colors/{id}','productController@editColors');
Route::get('/delete-colors/{id}','productController@deleteColors');
Route::post('/colors-save','productController@colorsSave');
Route::post('/colors-update','productController@colorsUpdate');


//option Management
Route::get('/remove-option/{id}','productController@removeOption');
Route::get('/remove-option-group/{id}','productController@removeOptionGroup');

//Custom QTY
Route::get('/remove-custom-qty/{id}','productController@removeCustomQty');



//Product Management
Route::get('/create-product','productController@createProduct');
Route::get('/get-category-tree','productController@categoryTree');
Route::get('/get_terms/{id}','productController@get_terms');
Route::post('/productSave','productController@productSave');
Route::post('/productUpdate','productController@productUpdate');
Route::post('/images-save', 'UploadImagesController@store');
Route::post('/images-delete', 'UploadImagesController@destroy');
Route::get('/viewProduct','productController@viewProduct');
Route::get('/get-product','productController@getProduct');
Route::get('/productDelete/{id}','productController@productDelete');
Route::get('/editProduct/{id}','productController@editProduct');
Route::get('/get_edit_attribute/{id}','productController@getEditAttribute');

Route::get('server-images/{id}','productController@getServerImages');
Route::post('/images-delete', 'UploadImagesController@destroy');

//page Management
Route::get('/about','settingController@about');
Route::get('/privacy-policy','settingController@privacyPolicy');
Route::get('/terms_condition','settingController@terms_condition');
Route::get('/shipping_detail','settingController@shipping_detail');

Route::post('/homeSettingabout','settingController@homeSettingabout');
Route::post('/homeSettingshipping','settingController@homeSettingshipping');
Route::post('/homeSettingterms','settingController@homeSettingterms');
Route::post('/homeSetting-Privacy','settingController@homeSettingPrivacyPolice');


Route::get('/social-details','settingController@socialMedia');
Route::post('/add-social','settingController@updatesocialMedia');

Route::get('/contact-details','settingController@contactView');
Route::post('/setting-contact','settingController@contactUpdate');
Route::get('/faq','settingController@faq');
Route::get('/edit_faq/{id}','settingController@editFaq');
Route::get('/delete_faq/{id}','settingController@deleteFaq');
Route::post('/faq_data','settingController@faqStore');
Route::post('/update_faq','settingController@faqUpdate');



//Home Page
Route::get('/home-add','pageSettingController@homeAd');
Route::post('/ads-update','pageSettingController@adUpdate');
Route::get('/show-slider','pageSettingController@showSlider');
Route::post('/slider-save','pageSettingController@sliderSave');
Route::post('/slider-update','pageSettingController@sliderUpdate');
Route::get('/edit-slider/{id}','pageSettingController@editSlider');
Route::get('/delete-slider/{id}','pageSettingController@deleteSlider');
Route::get('/drop-slider/{index}/{id}','pageSettingController@dropSlider');

//Home Layout
Route::get('/home-layout','pageSettingController@homeLayout');
Route::post('/save-layout','pageSettingController@SaveLayout');
Route::post('/update-layout','pageSettingController@UpdateLayout');
Route::get('/edit-layout/{id}','pageSettingController@EditLayout');
Route::get('/delete-layout/{id}','pageSettingController@DeleteLayout');
Route::get('/drop-layout/{index}/{id}','pageSettingController@dropLayout');


//Transports Management
Route::get('/transport', 'transportController@viewTransport');
Route::get('/edit-transport/{id}','transportController@editTransport');
Route::get('/delete-transport/{id}','transportController@deleteTransport');
Route::post('/save-transport','transportController@saveTransport');
Route::post('/update-transport','transportController@updateTransport');

//order
Route::get('/order','orderController@order');
//Route::get('/all-order','orderController@allOrder')->name('admin.all-order');
Route::get('/order-item/{id}','orderController@orderItem');
Route::get('/all-order/{filter}','orderController@allOrder');
Route::get('/order-action','orderController@orderAction')->name('order.action');
Route::get('/order-item-action','orderController@orderItemAction')->name('orderitem.action');


//order Transport
Route::get('/order-transport','orderController@orderTransport');
Route::get('/transport-order/{filter}','orderController@orderTransportGet');
Route::get('/order-transport-action','orderController@orderTransportAction')->name('ordertransport.action');
Route::get('/order-transport-details/{id}','orderController@orderTransportDetails');
Route::get('/order-Transport-item-action','orderController@orderTransportItemAction')->name('orderTransportItem.action');

//customer
Route::get('/customer','customerController@customer');
Route::get('/get-customer/{id}','customerController@getCustomer');
Route::get('/profile/{id}','customerController@profile');
Route::get('/verify-company/{id}','customerController@profile');
Route::get('/customer-order/{id}','customerController@customerOrder');
Route::get('/customer-transport/{id}','customerController@customerTransport');


//un verify company
Route::get('/verify-company','customerController@unverifyCompany');
Route::get('/verifyed-company/{id}','customerController@verifyCompany');
Route::get('/reject/{id}','customerController@reject');
Route::get('/approval/{id}','customerController@approval');

//review
Route::get('/review/{id}','customerController@review');
Route::get('/non-review','customerController@nonReview');
Route::get('/review-status/{id}/{data}','customerController@reviewStatus');

//Report
Route::get('/order-report','reportController@order');
Route::get('/transport-report','reportController@transport');
Route::post('/report/orders','reportController@orderReport');
Route::post('/report/transport','reportController@transportReport');
Route::get('/report/get-order','reportController@getOrderReport')->name('report.getOrder');
Route::get('/report/get-order-customer','reportController@getOrderCustomerReport')->name('report.getOrderCustomer');

//role
Route::get('/add-role','settingController@addRole');
Route::get('/role','settingController@role');
Route::post('/create-role','settingController@createRole');
Route::post('/update-role','settingController@updateRole');
Route::get('/role-edit/{id}','settingController@editRole');
Route::get('/role-delete/{id}','settingController@deleteRole');

//logs
Route::get('/order-log','reportController@orderLog');
Route::get('/get-order-log','reportController@getOrderLog');
Route::get('/search-order-log/{date1}/{date2}','reportController@searchOrderLog');

Route::get('/product-log','reportController@productLog');
Route::get('/get-product-log','reportController@getProductLog');
Route::get('/search-product-log/{date1}/{date2}','reportController@searchProductLog');

//Units
Route::get('/units','productController@viewUnit');
Route::get('/edit-unit/{id}','productController@editUnit');
Route::get('/delete-unit/{id}','productController@deleteUnit');
Route::post('/add-unit','productController@unitStore');
Route::post('/update-unit','productController@unitUpdate');


Route::get('/get-unit/{id}','productController@get_unit');
Route::get('/product-unit-delete/{id}','productController@productUnitDelete');
//Route::get('/product-unit-update/{id}/{data}','productController@productUnitUpdate');

});

Auth::routes();
Route::get('/add-wishlist/{id}','AccountController@addWishlist');
Route::get('/removewish/{id}','AccountController@removewish');
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'account'],function( ){
    Route::get('/review','AccountController@review');
    Route::get('/dashboard','AccountController@dashboard')->middleware('utype');
    Route::get('/wishlist','AccountController@wishlist');
    Route::get('/address','AccountController@address')->middleware('utype');
    Route::get('/orders','AccountController@orders')->middleware('utype');
    Route::get('/editCustomer/{id}','AccountController@editCustomer')->middleware('utype');
    Route::get('/edit-shipping/{id}','AccountController@editShipping')->middleware('utype');
    Route::get('/edit-billing/{id}','AccountController@editBilling')->middleware('utype');
    Route::post('/updateCustomer','AccountController@updateCustomer')->middleware('utype');
    Route::post('/userchangePassword','AccountController@userchangePassword')->middleware('utype');
    Route::post('/updateAddress','AccountController@updateAddress')->middleware('utype');
    Route::get('/vieworders/{id}','AccountController@vieworders')->middleware('utype');
    Route::get('/company','AccountController@company');
    Route::get('/company-verify','AccountController@companyVerify');

    //COD Checkout Verification
    Route::get('/verify-order-sms','AccountController@verifyOrder');


    //change Customer Account info
    Route::post('/change-account-info','AccountController@changeAccountInfo');
    Route::post('/change-account-info','AccountController@changeAccountInfo');
    Route::post('/update-billing','AccountController@updateBilling');
    Route::post('/update-shipping','AccountController@updateShipping');

    Route::get('/delete-shipping/{id}','AccountController@deleteShipping');
    Route::get('/delete-billing/{id}','AccountController@deleteBilling');

    Route::get('/add-review','AccountController@addReview');
    Route::get('/re-review','AccountController@reReview');

Route::get('/shipping', 'AccountController@accShipping');
Route::get('/billing', 'AccountController@accBilling');
Route::post('createShipping', 'AccountController@accCreateShipping');
Route::post('createBilling', 'AccountController@accCreateBilling');

//order Cancel
Route::get('order-cancel/{id}', 'AccountController@orderCancel');
//order Print
Route::get('order-print/{id}', 'AccountController@orderPrint');
});
Route::post('/submit-company','AccountController@submitCompany')->name('submit.company');
Route::get('/get-compare','pageController@compare');
Route::get('/add-compare/{id}','pageController@addCompare');
Route::get('/remove-compare/{id}','pageController@removeCompare');
Route::get('/compare',function(){
    if(Session::has('compare')){

        $product = product::whereIn('id',Session::get('compare'))->get();
    }else{
        $product= [];
    }
    return view('compare',compact('product'));
});

//Cart Management
Route::get('/add-cart/{id}/{qty}','pageController@addToCart');
Route::get('/get-cart', function () {
    $total = Cart::getTotal();
    $cartTotalQuantity = count(Cart::getContent());
    $data = $total . '|' . $cartTotalQuantity;
    return json_encode($data);
});
Route::get('/clean-cart', function () {
    Cart::clear();
});
Route::get('/cart-qty-minus/{id}', function ($id) {
    Cart::update($id, array(
        'quantity' => -1,
    ));
});
Route::get('/cart-qty-plus/{id}', function ($id) {
    Cart::update($id, array(
        'quantity' => +1,
    ));
});
Route::get('/remove-cart/{id}', function ($id) {
    Cart::remove($id);
    Session::forget('coupon');
});
Route::get('/cart-update-value/{id}/{value}', function ($id,$value) {
    Cart::update($id, array(
        'quantity' => array(
            'relative' => false,
            'value' => $value
  ),
    ));
});
Route::get('/cart',function(){
    return view('cart');
});
Route::get('/cart-item',function(){
    $cartCollection = Cart::getContent();

    return response()->json($cartCollection);
});

Route::post('/transportDetails-save','pageController@transportDetails');


Route::get('/cart-menu', function(){
    $cartCollection = Cart::getContent();
    $total = Cart::getTotal();
    $tax = round($total*5/105,2);
    $output='';
    foreach($cartCollection as $cartData){
          $amount = ($cartData->quantity * $cartData->price);
          $product = product::find($cartData->id);

    $output .='
    <div class="animated_item">
    <div class="clearfix sc_product">
          <a href="/product/'.$cartData->id.'" class="product_thumb"><img src="'.asset('/product_img').'/'.$product->product_image.'" alt="" style="width:50px"></a>
          <a href="/product/'.$cartData->id.'" class="product_name">'.$cartData->name.'</a>
          <p>'.$cartData->quantity.'x'.$amount.'</p>
          <button class="close" onclick="removeCartItem('.$cartData->id.')"></button>
    </div>
</div>';
    }

$output .='<div class="animated_item">
<ul class="total_info">
          <li class="total"><b><span class="price">Total:</span> '.$total.'</b></li>
    </ul>
</div>
<div class="animated_item">
    <a href="/cart" class="button_grey">View Cart</a>
    <a href="/transports" class="button_blue">Checkout</a>
</div>';
echo $output;
});

Route::get('/cart-data', function(){
    $cartCollection = Cart::getContent();
    $total = Cart::getTotal();
    $shipping_charge=0;
    if(!Cart::isEmpty()){
    $output='<div class="container">
    <ul class="breadcrumbs">

        <li><a href="index.html">Home</a></li>
        <li>Shopping Cart</li>

    </ul>

    <section class="section_offset">

        <h1>Shopping Cart</h1>

        <!-- - - - - - - - - - - - - - Shopping cart table - - - - - - - - - - - - - - - - -->

        <div class="table_wrap">

            <table class="table_type_1 shopping_cart_table">

                <thead>

                    <tr>
                        <th class="product_image_col">Product Image</th>
                        <th class="product_title_col">Product Name</th>

                        <th>Price</th>
                        <th class="product_qty_col">Quantity</th>
                        <th>Total</th>
                        <th class="product_actions_col">Action</th>
                    </tr>

                </thead>

                <tbody>';
    foreach($cartCollection as $cartData){
          $amount = ($cartData->quantity * $cartData->price);
          $product = product::find($cartData->id);

    $output .=' <tr>

    <td class="product_image_col" data-title="Product Image">

        <a href="/product/'.$cartData->id.'"><img src="/product_img/'.$product->product_image.'" alt=""></a>

    </td>
    <td data-title="Product Name">

        <a href="/product/'.$cartData->id.'" class="product_title">'.$cartData->name.'</a>

        <ul class="sc_product_info">';
        if(count($cartData->attributes)>0){

            foreach($cartData->attributes as $key=>$value) {
                foreach($value as $field => $row) {
                    $output .='<li>'.$field.' : '.$row.'</li>';
                }
            }
          }

        $output .='  </ul>

    </td>

    <td class="subtotal" data-title="Price">
    ₹ '.$cartData->price.'
    </td>

    <td data-title="Quantity">
        <div class="qty min clearfix">
            <button class="theme_button" data-direction="minus" onclick="updateqtyMinus('.$cartData->id.')">&#45;</button>
            <input type="text" name="cartQty" id="cartQty'.$cartData->id.'" value="'.$cartData->quantity.'">
            <button class="theme_button" data-direction="plus" onclick="updateqtyPlus('.$cartData->id. ')">&#43;</button>
            <div class="left_side" style="margin-top: 12px;">
        <a href="javascript:void(null)" onclick="updateCart('. $cartData->id.')" class="button_blue middle_btn">Update</a>
    </div>
        </div>
    </td>

    <td class="total" data-title="Total">
    ₹ '.$amount.'
    </td>

    <td data-title="Action">
        <a href="javascript:void(null)" onclick="removeItemCart('.$cartData->id.')" class="button_dark_grey icon_btn remove_product"><i class="icon-cancel-2"></i></a>
    </td>

</tr>';
    }
    $total = $total+$shipping_charge;
    $output .=' </tbody>
    </table>

</div>

<footer class="bottom_box on_the_sides">
    <div class="left_side">
        <a href="/" class="button_blue middle_btn">Continue Shopping</a>
    </div>
    <div class="right_side">
        <a href="javascript:void(null)" onclick="cleanCart()" class="button_grey middle_btn">Clear Shopping Cart</a>
    </div>
</footer>

</section>

<div class="section_offset">
<div class="row">
    <section class="col-sm-6">

    </section>
    <section class="col-sm-6">
        <h3>Total</h3>
        <div class="table_wrap">
            <table class="zebra">
                <tfoot>
                    ';

                 $output .='   <tr class="total">
                        <td>Total</td>
                        <td>₹ '.$total.'</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <footer class="bottom_box text-center">
            <a class="button_blue middle_btn" href="/transports">Proceed to Checkout</a>
            <div class="single_link_wrap">

            </div>
        </footer>
    </section>
</div>
</div>
</div>';
}else{
    $output = '<div class="container">
    <ul class="breadcrumbs">
        <li><a href="index.html">Home</a></li>
        <li>Shopping Cart</li>
    </ul>
    <section class="section_offset">
        <h1 style="text-align:center">Your Shopping Cart is Empty</h1>
    </section>
</div>';
}
print $output;
});


Route::get('/checkout', 'AccountController@checkout');
Route::get('/shipping', 'AccountController@shipping');
Route::get('/billing', 'AccountController@billing');
Route::post('createShipping', 'AccountController@createShipping');
Route::post('createBilling', 'AccountController@createBilling');
Route::get('menu-data', 'pageController@menuData');
Route::get('order-placed/{id}/{ship}/{bill}', 'AccountController@orderPlaced');
