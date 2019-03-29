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



Route::get('/wishlist','pageController@wishlist'); 
Route::get('/add-wishlist/{id}','pageController@addWishlist');
Route::get('/remove-wish/{id}','pageController@removewish');

Route::get('/sms-demo', function () {
   try{
$requestParams = array(
    'route' => '2',
    'api-token' => '25p83e9*wu.0szd_4),7hyaokirlfbnvgcxj1mqt',
    'sender' => 'KASMDU',
    'numbers' => '7010384622',
    'message' => 'Hi Prasanth test'
);
//merge API url and parameters
$apiUrl = "http://smspro.co.in/httpapi/v1/sendsms?";
foreach($requestParams as $key => $val){
    $apiUrl .= $key.'='.urlencode($val).'&';
}
$apiUrl = rtrim($apiUrl, "&");

//API call
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_exec($ch);
curl_close($ch);
   }
   catch(Exception  $e){
       echo $e->getMessage();
   }
});



Auth::routes(); 
Auth::routes(['verify' => true]);
Route::group(['prefix' => 'admin'],function(){

    Route::get('/login', function () {
        return view('admin/app');
    });
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

//Product Management
Route::get('/create-product','productController@createProduct'); 
Route::get('/get-category-tree','productController@categoryTree'); 
Route::get('/get_terms/{id}','productController@get_terms'); 
Route::post('/productSave','productController@productSave');
Route::post('/productUpdate','productController@productUpdate');
Route::post('/images-save', 'UploadImagesController@store');
Route::post('/images-delete', 'UploadImagesController@destroy');
Route::get('/viewProduct','productController@viewProduct'); 
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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'account'],function( ){ 
    Route::get('/review','AccountController@review');
    Route::get('/dashboard','AccountController@dashboard');
    Route::get('/wishlist','AccountController@wishlist');
    Route::get('/address','AccountController@address');
    Route::get('/orders','AccountController@orders');
    Route::get('/editCustomer/{id}','AccountController@editCustomer');
    Route::get('/editAddress/{id}','AccountController@editAddress');
    Route::post('/updateCustomer','AccountController@updateCustomer');
    Route::post('/userchangePassword','AccountController@userchangePassword');
    Route::post('/updateAddress','AccountController@updateAddress');
    Route::get('/vieworders/{id}','AccountController@vieworders');
});

//Cart Management
Route::post('/add-cart/{id}','pageController@addCart');
Route::get('/get-cart', function () {
    $total = Cart::getTotal();
    $cartTotalQuantity = Cart::getTotalQuantity();
    $data = $total . '|' . $cartTotalQuantity;
    return json_encode($data);
});
Route::get('/clean-cart', function () {
    Cart::clear();
    Session::forget('coupon');
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