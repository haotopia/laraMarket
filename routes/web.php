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
Route::any('/wechat', 'WeChatController@serve');
Route::any('/oauth', 'WeChatController@oAuth');

Route::group(['middleware' => ['web', 'wechat.oauth']], function () {
	Route::get('/wechatUser', 'HomeController@wechatUser');
	Route::get('home', 'HomeController@wechatUser');
	Route::get('user', function () {
		$user = session('wechat.oauth_user'); // 拿到授权用户资料

		return dd($user);
	});
});
Route::get('/home', 'HomeController@show')->name('home');