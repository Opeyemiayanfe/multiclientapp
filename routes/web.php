<?php

use Illuminate\Support\Facades\Route;

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
    $service = DB::table('merchants')->get();
    return view('frontpage.index',['service'=>$service]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/signup', 'SignupController@index');
Route::get('/signup/create', 'SignupController@create');
Route::post('/signup', 'SignupController@store');

Route::get('/merchlogin/create', 'MerchantlogController@create');
Route::post('/merchlogin', 'MerchantlogController@store');
Route::get('/merchlogout', 'MerchantlogController@destroy');

Route::get('merchant', 'MerchantController@index');
Route::get('/merchant/create', 'MerchantController@create');
Route::post('/merchant', 'MerchantController@store');
Route::get('/merchant/{id}', 'MerchantController@show');

Route::get('/product/create', 'ProductController@create');
Route::post('/product', 'ProductController@store');
Route::get('/product', 'ProductController@index');

Route::get('/userpage', 'UserpageController@index');
Route::get('/userpage/{id}', 'UserpageController@show');
Route::get('/userpage/{id}/edit', 'UserpageController@edit');

Route::get('/cart','CartController@index');
Route::put('/cart/{id}','CartController@update');
Route::get('/cart/{id}/edit','CartController@edit');
Route::delete('/cart/{id}','CartController@destroy');

Route::resource('check', 'CheckoutController');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');