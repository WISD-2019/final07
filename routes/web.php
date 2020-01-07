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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//商城主頁面
Route::get('shop','ProductController@shop')->name('shop');

//價格排序
Route::get('shopprice/{type}','ProductController@price')->name('shopprice');
Route::get('shopprice/asc','ProductController@asc')->name('asc');
Route::get('shopprice/desc','ProductController@desc')->name('desc');


//顯示商品詳細資訊
Route::get('detail/{id}','ShopDetailController@detail')->name('detail');

//搜尋
Route::get('search','ProductController@search')->name('search');

//商品分類:衣服
Route::get('shop/clothe','ProductController@clothe')->name('clothe');

//商品分類:褲子
Route::get('shop/pants','ProductController@pants')->name('pants');

//商品分類:外套
Route::get('shop/coat','ProductController@coat')->name('coat');

//購物車頁面
Route::get('cart','CartController@index')->name('cart');

//購物車新增商品
Route::get('cart/{id}','CartController@add')->name('cart_add');

//購物車數量修改
Route::get('cart/{id}/{q}','CartController@update')->name('cart_update');

//購物車項目刪除
Route::delete('cart/{id}','CartController@delete')->name('cart_delete');

//結帳
Route::get('checkout','CheckoutController@checkout')->name('checkout');
