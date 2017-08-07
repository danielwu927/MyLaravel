<?php

namespace App\Http\Controllers;

//sitescontroller

class SitesController extends Controller
{
    //页面控制器，用于控制主页站点的页面跳转
    public function index(){
        return view('shuini.index');
    }

    public function about(){

        $name='wudi';
        $data=[];
        $data['first']='wu';
        $data['last'] ='di';
        return view('sites.about',$data);
    }
    public function surveyPage(){

        return view('sites.surveys');
    }

    public function getLogin(){
        return view('shuini.login');
    }

    public function postLogin(){
        return view();
    }

    public function getRegister(){
        return view('shuini.register');
    }
    public function postRegister()
    {
        ;
    }

    public function home(){
        return view('shuini.home');
    }


}