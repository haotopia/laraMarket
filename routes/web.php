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
Route::any('/wechat', 'weChatController@serve');

Route::group(['middleware' => ['web']], function () {

	Route::any('/home', 'HomeController@show')->name('home.show')->middleware('wechat.oauth');

	Route::any('/wechatUser', 'HomeController@wechatUser');
	Route::any('/stores', 'StoresController@show')->name('stores.show');
});

Route::resource('stores', 'StoresController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::resource('addresses', 'AddressesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);