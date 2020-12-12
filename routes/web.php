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
//route login
Route::get('/dang-nhap','UserController@signin');
//route signup
Route::get('/dang-ki','UserController@signup');
//route san pham
Route::get('/loai-san-pham/{id}','ProductController@getProductByType');
//route chi tiet san pham
Route::get('/chi-tiet/{id}','ProductController@getProductDetail');
