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

//网站入口
Route::get('/', 'Home\RegisterController@register');
Route::get('/home/captcha/{tmp}','Home\RegisterController@captcha');

Route::get('/home/login/','Home\LoginController@login');
Route::post('/home/dologin','Home\LoginController@doLogin');

// Route::group(['middleware'=>'hpage'], function (){

	Route::get('/home/hpage','Home\HpageController@index');
	
// });























//后台登录
	Route::get('/admin/login', 'Admin\LoginController@login');
	Route::post('/admin/dologin', 'Admin\LoginController@doLogin');
//验证码
	Route::get('/admin/captcha/{tmp}', 'Admin\LoginController@captcha');

Route::group(['middleware'=>'myauth'], function (){
	
	//后台首页
	Route::get('/admin/index','Admin\IndexController@index');

	//退出登录
	Route::get('/admin/logout','Admin\LoginController@logout');

	
});



