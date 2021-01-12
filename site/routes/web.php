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
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');




Route::get('/products/{category_id}','HomeController@products');

Route::get('/cartPage','HomeController@cartPage');

Route::get('/', 'HomeController@index');
Route::get('/home', function () {

    return redirect('/');

});

Route::get('/products/view/{id}','ProductsController@view');
Route::get('/products/add_to_cart/{product_id}','ProductsController@add_to_cart');
Route::post('/confirmBuy','ProductsController@confirmBuy');

Route::get('/categories/view/{id}','CategoriesController@view');
Route::get('/get_cart','ProductsController@get_cart');

Route::post('/addtocart','HomeController@addToCart');


Route::get('/uploadfile', 'UploadfileController@index');
Route::post('/uploadfile', 'UploadfileController@upload');




