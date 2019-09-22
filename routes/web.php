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
Route::group(['middleware' => ['location']], function () {
Route::get('/','pageController@home');
Route::get('/about','pageController@about');
Route::get('/terms','pageController@terms');
Route::get('/privacy','pageController@privacy');
Route::get('/shipping_details','pageController@shipping_details');
Route::get('/faq','pageController@faq');
Route::get('/contact','pageController@contact');
});

Route::get('/event', 'PayController@index');
 Route::post('/pay', 'PayController@pay');
 Route::get('/pay-success', 'PayController@success');

 //paint quick modal
 Route::get('/quick-model-paint/{id}', 'pageController@quickModelPaint');
//tiles stock filder
Route::get('/tiles/stock/{id}','pageController@tileStock');



//steel calculator
Route::get('/calculator/steel/{id}','CalculatorController@steelCalc');


//bricks predict
Route::get('/bricks-price-predict','CalculatorController@bricksPredict');
//pages route

Route::get('/category-tree','pageController@categoryTree');
Route::get('/category/{id}','categoryController@categoryProduct');
Route::get('/category/{id}/{sort}','categoryController@categorySortProduct');
Route::get('/product/{id}','categoryController@getProduct');
Route::get('/steel-product/{id}','categoryController@steelProduct');
Route::get('/quick-view/{id}','pageController@quickModel');
Route::get('/quick-view-tiles/{id}','pageController@quickModelTiles');
Route::get('/product-advance-filter/{product}/{attr}/{terms}','categoryController@advanceFilter');

Route::get('/selected-color','pageController@selectedColor');
Route::get('/get-colors','pageController@getColors');
Route::get('/get-search-color','pageController@getSearchColors');
Route::get('/get-color/{product}/{category}','pageController@getColorById');
Route::get('/set-color/{id}','pageController@setColorById');
Route::get('/get-category','pageController@getColorCategory');
Route::get('/get-color-modal/{id}','pageController@colorModals');



//cart Page
Route::post('/set-cart-item','cartController@postCartItem');
Route::post('/paintAddtoCart','cartController@paintProductAddtoCart');
Route::post('/tilesAddtoCart','cartController@tilesProductAddtoCart');
Route::get('/steelAddtoCart','cartController@steelProductAddtoCart');
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

//tiles Upload
Route::get('/tiles-upload','settingController@tilesUpload');
Route::get('/tiles','productController@viewTitle');
Route::get('/get-tiles-product','productController@getTilesProduct');
Route::get('/update-secondSubcategory','productController@updateTilesSubCategory');



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
Route::post('/upload-tiles-json','productController@uploadTilesJSON');
Route::post('/update-tiles-json','productController@updateTilesJSON');
Route::get('/delete-all-tiles','productController@deleteAll');
Route::get('/get-single-tiles-product/{id}','productController@getSingleTilesProduct');


//colors
Route::get('/color-master','colorMasterController@viewColors');
Route::get('/onload_shade','colorMasterController@onloadShade');
Route::get('/delete_shade_family/{id}','colorMasterController@deleteShadeFamily');
Route::get('/delete_shade_color/{id}','colorMasterController@deleteShadeColor');
Route::post('/save-shade-family','colorMasterController@saveShadeFamily');
Route::post('/save-shade-color','colorMasterController@saveShadeColor');
Route::get('/color-bulk-upload','colorMasterController@colorBulkUpload');
Route::get('/color-products','colorMasterController@colorProduct');
Route::get('/new-color-product','colorMasterController@newColorProduct');
Route::get('/edit-paint-product/{id}','colorMasterController@editColorProduct');
Route::get('/delete-product-feature','colorMasterController@deleteProductFeature');
Route::post('/color-bulk-data','colorMasterController@bulkUploadColor');
Route::post('/color-product-save','colorMasterController@colorProductSave');


Route::get('/delete-distance_price/{id}','productController@distancePriceDeleteById');


//paint product_edit lit
Route::get('/delete-product-paint_lit/{id}','colorMasterController@productPaintLit');
Route::get('/change-paint-lit','colorMasterController@changePaintLit');

//tiles price update
Route::get('/update-price_type','productController@updatePriceType');
Route::get('/update-value_type','productController@updateValueType');
Route::get('/update-amount','productController@updateAmount');

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

//deals
Route::get('deals','AccountController@deals');
});
Route::post('/submit-company','AccountController@submitCompany')->name('submit.company');
Route::get('/get-compare','pageController@compare');
Route::get('/add-compare/{id}','pageController@addCompare');
Route::get('/remove-compare/{id}','pageController@removeCompare');
Route::get('/compare',function(){
    if(Session::has('compare')){

        $product = product::whereIn('id',Session::get('compare'))->get();
        if($product[0]->sub_category != null){
            $related = product::where('sub_category',$product[0]->sub_category)->take(10)->get();
        }else{
             $related = product::where('category',$product[0]->category)->take(10)->get();
        }
    }else{
        $product= [];
    }
    return view('compare',compact('product','related'));
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


Route::get('/cart-menu','cartController@cartMenu');

Route::get('/cart-data', 'cartController@cartData');


Route::get('/checkout', 'AccountController@checkout');
Route::get('/shipping', 'AccountController@shipping');
Route::get('/billing', 'AccountController@billing');
Route::post('createShipping', 'AccountController@createShipping');
Route::post('createBilling', 'AccountController@createBilling');
Route::get('menu-data', 'pageController@menuData');
Route::get('order-placed/{id}/{ship}/{bill}', 'AccountController@orderPlaced');

//location
Route::get('/get-location-page', function(){
    $data = [
        'Ariyalur',
        'Chennai',
        'Coimbatore',
        'Cuddalore',
        'Dharmapuri',
        'Dindigul',
        'Erode',
        'Kanchipuram',
        'Kanniyakumari',
        'Karur',
        'Krishnagiri',
        'Madurai',
        'Nagapattinam',
        'Namakkal',
        'Nilgiris',
        'Perambalur',
        'Pudukkottai',
        'Ramanathapuram',
        'Salem',
        'Sivaganga',
        'Thanjavur',
        'Theni',
        'Thoothukudi',
        'Tiruchirappalli',
        'Tirunelveli',
        'Tiruppur',
        'Tiruvallur',
        'Tiruvannamalai',
        'Tiruvarur',
        'Vellore',
        'Viluppuram',
        'Virudhunagar',
        ];
    return view('modal.location',compact('data'));
});
Route::get('/set-location/{data}','pageController@setLocations');