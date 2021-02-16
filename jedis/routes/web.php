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
    return view('index');
});
//admin routes
    Route::view('admin-login','admin/login');
    Route::view('admin-panel','admin/panel');
    Route::post('admin-login','App\Http\Controllers\admin_controller@login');
    Route::get('admin/logout','App\Http\Controllers\admin_controller@logout');

// user login -signup
Route::get('/user-login','App\Http\Controllers\auth_controller@login_form');
Route::view('/user-signup','auth/signup');
Route::post('user-login','App\Http\Controllers\auth_controller@login');
Route::post('user-signup','App\Http\Controllers\auth_controller@signup');
Route::get('/user-logout','App\Http\Controllers\auth_controller@logout');

// product related
// Route::get('shop-page','App\Http\Controllers\product_controller@shop_page');
Route::get('product-page/{id}','App\Http\Controllers\product_controller@product_page');
Route::view('cart','cart/cart');
Route::get('/checkout','App\Http\Controllers\product_controller@checkout_data');
Route::get('thankyou-page','App\Http\Controllers\product_controller@thankyou_page');


Route::get('manage-product','App\Http\Controllers\product_controller@manage_product');
Route::get('manage-users','App\Http\Controllers\product_controller@manage_user');

Route::get('add-new-product','App\Http\Controllers\product_controller@add_product_view');
Route::post('add-new-product','App\Http\Controllers\product_controller@add_product');

Route::get('edit-product/{id}','App\Http\Controllers\product_controller@edit_product_form');
Route::get('delete-product/{id}','App\Http\Controllers\product_controller@delete_product');
Route::post('edit-product/edit-product','App\Http\Controllers\product_controller@edit_product');


// Cart related
Route::get('cart','App\Http\Controllers\product_controller@cart_data');
Route::post('product-page/add-to-cart','App\Http\Controllers\product_controller@Add_to_cart');
Route::post('add-qty','App\Http\Controllers\product_controller@Add_to_cart_ajax');
Route::get('remove_product/{id}','App\Http\Controllers\product_controller@remove_product_from_cart');

// About Us , contact us
Route::view('about-us','about');
Route::view('contact-us','contact');
Route::post('contact_data','App\Http\Controllers\product_controller@contact_data');

Route::get('shop-page','App\Http\Controllers\product_controller@getData');