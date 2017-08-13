<?php

namespace App\Http\Controllers;

//sitescontroller

class SitesController extends Controller
{
    //页面控制器，用于控制主页站点的页面跳转
    public function index(){
        return view('shuini.index');
    }


    public function surveyPage(){

        return view('sites.surveys');
    }

    public function getLogin(){

        return view('auth.login');
    }

    public function postLogin(){
        return view();
    }

    public function getRegister(){
        return view('auth.register');
    }
    public function userPage()
    {
        return view('shuini.userpage');
    }

    public function showAdminHome(){
        return view('shuini.admin_home');
    }


}
