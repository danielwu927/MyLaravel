<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Zizaco\Entrust\Entrust;
use Zizaco\Entrust\Traits\EntrustUserTrait;
//sitescontroller

class SitesController extends Controller
{
    //页面控制器，用于控制主页站点的页面跳转
    public function index(){
        return view('shuini.index');
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
    public function hello(){
        $user=Auth::user();
        switch ($user->role) {
          case 2:return view('hello');
          case 3:return view('researcher');
          case 4:return view('expert');
          case 5:return redirect('admin/home');
          default: return redirect('/');


      }


    }

    public function showAdminHome()
    {

            $user=Auth::user();

        if ($user->hasRole('admin')) {
            return view('shuini.admin_home');
        }else
            return redirect('/');
    }


}
