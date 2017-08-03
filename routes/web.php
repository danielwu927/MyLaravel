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

Route::get('/', 'SitesController@index');      //根目录显示首页

Route::get('shuini', 'SitesController@index');

Route::get('register.php','SitesController@register');   //注册页面

Route::get('aaaa','SitesController@aaaa');

Route::get('login.php','SitesController@loginAuth');      //登录页面
