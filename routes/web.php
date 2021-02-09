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

//Hiện trang chủ
Route::get('/','App\Http\Controllers\HomeController@index');

//Hiển thị trang đăng nhập
Route::get('/login-admin','App\Http\Controllers\AdminController@login');
Route::get('/admin-layout','App\Http\Controllers\AdminController@admin_layout');
Route::get('/logout','App\Http\Controllers\AdminController@logout');
Route::post('/admin-layout-manager', 'App\Http\Controllers\AdminController@admin_layout_manager');


//Sản phẩm
Route::get('/show-product','App\Http\Controllers\ProductController@show_product');
Route::get('/add-product','App\Http\Controllers\ProductController@add_product');
Route::post('/save-product','App\Http\Controllers\ProductController@save_product');
Route::get('/edit-product/{product_id}','App\Http\Controllers\ProductController@edit_product');
Route::post('/update-product/{product_id}','App\Http\Controllers\ProductController@update_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\ProductController@delete_product');

//Danh mục
Route::get('/add-category','App\Http\Controllers\CategoryController@add_category');
Route::get('/show-category','App\Http\Controllers\CategoryController@all_category');
Route::post('/save-category','App\Http\Controllers\CategoryController@save_category');
//Sua danh muc
Route::get('/edit-category/{category_id}','App\Http\Controllers\CategoryController@edit_category');
Route::post('/update-category/{category_id}','App\Http\Controllers\CategoryController@update_category');
//Xóa danh muc
Route::get('/delete-category/{category_id}','App\Http\Controllers\CategoryController@delete_category');
//Chi tiet san pham
Route::get('/chi-tiet-san-pham/{product_id}','App\Http\Controllers\ProductController@detail_product');

//Tìm kiếm sản phẩm theo danh mục-ADMIN
Route::get('/search-category/{category_id}','App\Http\Controllers\CategoryController@list_product_category');
// Tìm kiếm sản phẩm theo danh mục-HOME
Route::get('/danh-muc-san-pham/{category_id}','App\Http\Controllers\CategoryController@product_list');
//Thêm sản phẩm vào giỏ hàng:
Route::post('/save-cart','App\Http\Controllers\CartController@save_cart');
Route::get('/show-cart','App\Http\Controllers\CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','App\Http\Controllers\CartController@delete_to_cart');
Route::post('/update-cart','App\Http\Controllers\CartController@update_cart');

//Tìm kiếm sản phẩm theo từ khóa
Route::post('/search-product','App\Http\Controllers\HomeController@search');





