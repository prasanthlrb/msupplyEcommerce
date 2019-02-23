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

Route::get('/', function () {
    return view('home');
});
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
Route::post('/images-save', 'UploadImagesController@store');
Route::post('/images-delete', 'UploadImagesController@destroy');
Route::get('/viewProduct','productController@viewProduct'); 
Route::get('/productDelete/{id}','productController@productDelete'); 
Route::get('/editProduct/{id}','productController@editProduct'); 
Route::get('/get_edit_attribute/{id}','productController@getEditAttribute'); 
});