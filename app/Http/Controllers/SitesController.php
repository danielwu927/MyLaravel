<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//sitescontroller

class SitesController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function about(){

        return view('sites.about');
    }
    public function aaaa(){

        return view('shuini.index');
    }

}
