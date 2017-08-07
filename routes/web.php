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

Route::get('/', 'PagesController@index');      //根目录显示网站首页

Route::get('shuini', 'PagesController@index');

Route::get('register','PagesController@register');   //显示注册页面

Route::get('auth/register','PagesController@register');

Route::get('login','PagesController@login');

Route::get('auth','PagesController@login');      //显示登录页面
Route::get('auth/login','PagesController@login');

Route::get('/home','PagesController@home');



