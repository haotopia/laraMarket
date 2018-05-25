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
	Route::any('/address/users', 'AddressesController@show')->name('address.show');
	Route::any('/addresses/store', 'AddressesController@store');
	Route::any('/home/{id}/detail', 'GoodsController@show');
	Route::any('/stores/{id}', 'GoodsesController@show');
	Route::any('/comments/{id}', 'CommentsController@show');
});

// Route::resource('stores', 'StoresController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
// Route::resource('addresses', 'AddressesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
// Route::resource('categories', 'CategoriesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
// Route::resource('goods', 'GoodsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
// Route::resource('shopcarts', 'ShopcartsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
// Route::resource('comments', 'CommentsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
// Route::resource('payments', 'PaymentsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
Route::any('/admin/index', 'AdminController@show')->name('admin.index');
Route::any('/admin/login', 'AdminController@login')->name('admin.login');
Route::any('/admin/list', 'AdminController@list')->name('admin.list');
Route::any('/admin/listdetail', 'AdminController@listdetail')->name('admin.listdetail');
Route::any('/admin/table_classify', 'AdminController@tableClassify')->name('admin.table_classify');
Route::any('/admin/table_commit_list', 'AdminController@tableCommitList')->name('admin.table_commit_list');
Route::any('/admin/table_commit_list/{id}', 'AdminController@tableCommitList');
Route::any('/admin/table_commit_change', 'AdminController@tableCommitChange')->name('admin.table_commit_change');
Route::any('/admin/table_font_list', 'AdminController@tableFontList')->name('admin.table_font_list');
Route::post('/admin/goods_change', 'GoodsesController@Store')->name('admin.goodsStore');