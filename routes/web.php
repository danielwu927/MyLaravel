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

Route::get('/', 'PagesController@index');      //根目录显示首页

Route::get('shuini', 'PagesController@index');

Route::get('/register','PagesController@register');   //显示注册页面

Route::get('/survey','PagesController@surveyPage');

Route::get('/login','PagesController@login');      //显示登录页面

Route::get('/home','PagesController@home');

