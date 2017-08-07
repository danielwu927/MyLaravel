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

Route::get('/', 'SitesController@index');      //根目录显示网站首页

Route::get('shuini', 'SitesController@index');

Route::get('auth/register','SitesController@getRegister');   //显示注册页面

Route::post('auth/register','SitesController@postRegister');  //验证注册

Route::get('auth/login','SitesController@getLogin');      //显示登录界面

Route::post('auth/login','SitesController@postLogin');      //验证登录

Route::get('/home','SitesController@home');

Route::get('about','SitesController@about');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
