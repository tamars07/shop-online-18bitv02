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


//route cua trang ban dien thoai
Route::get('/','ProductController@index');

Route::get('/dang-nhap','UserController@signin');
Route::get('/dang-ki','UserController@signup');

Route::get('/loai-san-pham/{id}','ProductController@getProductByType');

Route::get('/chi-tiet/{id}', 'ProductController@getProductDetail');


// da chinh sua tai nhanh hoang.huynh








