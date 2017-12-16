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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('layouts.home');
});
Route::get('/list-product', function () {
    return view('layouts.list_product');
});
Route::get('/news', function () {
    return view('layouts.news');
});
Route::get('/list-news', function () {
    return view('layouts.list_news');
});
Route::get('/list-qnas', function () {
    return view('layouts.list_qnas');
});
Route::get('/product-detail', function () {
    return view('layouts.product_detail');
});
Route::get('/cart', function () {
    return view('layouts.cart');
});