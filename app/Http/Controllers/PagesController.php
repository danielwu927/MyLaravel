<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//sitescontroller

class PagesController extends Controller
{
    //页面控制器，用于控制主页站点的页面跳转
    public function index(){
        return view('shuini.index');
    }

    public function about(){

        return view('sites.about');
    }
    public function surveyPage(){

        return view('sites.surveys');
    }

    public function login(){
        return view('shuini.login');
    }
    public function register(){
        return view('shuini.register');
    }

    public function home(){
        return view('shuini.home');
    }


}
