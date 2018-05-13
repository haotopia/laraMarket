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
	Route::get('/user', function () {
		$user = session('wechat.oauth_user'); // 拿到授权用户资料
		dd($user)->middleware('wechat.oauth');
	});
	Route::any('/wechatUser', 'HomeController@wechatUser');
});
