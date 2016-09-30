<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/', 'WelcomeController@index');
Route::get('logout', 'Auth\LoginController@logout');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'level.mod']], function () {
//Route::group(['prefix' => 'admin'], function (){
	Route::group(['prefix' => 'cate'], function () {
		Route::get('list', ['as' => 'admin.cate.list', 'uses' => 'CateController@getList']);
		Route::get('add', ['as' => 'admin.cate.getAdd', 'uses' => 'CateController@getAdd']);
		Route::post('add', ['as' => 'admin.cate.postAdd', 'uses' => 'CateController@postAdd']);
		Route::get('delete/{id}', ['as' => 'admin.cate.getDelete', 'uses' => 'CateController@getDelete']);
		Route::get('edit/{id}', ['as' => 'admin.cate.getEdit', 'uses' => 'CateController@getEdit']);
		Route::post('edit/{id}', ['as' => 'admin.cate.postEdit', 'uses' => 'CateController@postEdit']);
	});

	Route::group(['prefix' => 'product'], function () {
		Route::get('list', ['as' => 'admin.product.list', 'uses' => 'ProductController@getList']);
		Route::get('add', ['as' => 'admin.product.getAdd', 'uses' => 'ProductController@getAdd']);
		Route::post('add', ['as' => 'admin.product.postAdd', 'uses' => 'ProductController@postAdd']);
		Route::get('delete/{id}', ['as' => 'admin.product.getDelete', 'uses' => 'ProductController@getDelete']);
		Route::get('edit/{id}', ['as' => 'admin.product.getEdit', 'uses' => 'ProductController@getEdit']);
		Route::post('edit/{id}', ['as' => 'admin.product.postEdit', 'uses' => 'ProductController@postEdit']);
		Route::get('delImg/{id}', ['as' => 'admin.product.getDelImg', 'uses' => 'ProductController@getDelImg']);
	});

	Route::group(['prefix' => 'user'], function () {
		Route::get('list', ['as' => 'admin.user.list', 'uses' => 'UserController@getList']);
		Route::get('add', ['as' => 'admin.user.getAdd', 'uses' => 'UserController@getAdd']);
		Route::post('add', ['as' => 'admin.user.postAdd', 'uses' => 'UserController@postAdd']);
		Route::get('delete/{id}', ['as' => 'admin.user.getDelete', 'uses' => 'UserController@getDelete']);
		Route::get('edit/{id}', ['as' => 'admin.user.getEdit', 'uses' => 'UserController@getEdit']);
		Route::post('edit/{id}', ['as' => 'admin.user.postEdit', 'uses' => 'UserController@postEdit']);
	});

	Route::get('home', 'HomeController@index');
});

Route::get('loai-san-pham/{id}/{tenloai}', ['as' => 'loaisanpham', 'uses' => 'WelcomeController@loaisanpham']);
Route::get('chi-tiet-san-pham/{id}/{tenloai}', ['as' => 'chitietsanpham', 'uses' => 'WelcomeController@chitietsanpham']);

//send mail
Route::get('lien-he', ['as' => 'getLienHe', 'uses' => 'WelcomeController@getLienHe']);
Route::post('lien-he', ['as' => 'postLienHe', 'uses' => 'WelcomeController@postLienHe']);

//gio hang
Route::get('mua-hang/{id}/{tensanpham}', ['as' => 'muahang', 'uses' => 'WelcomeController@muahang']);
Route::get('gio-hang', ['as' => 'giohang', 'uses' => 'WelcomeController@giohang']);
Route::get('xoa-san-pham/{id}', ['as' => 'xoasanpham', 'uses' => 'WelcomeController@xoasanpham']);
Route::get('cap-nhat/{id}/{qty}', ['as' => 'capnhat', 'uses' => 'WelcomeController@capnhat']);
