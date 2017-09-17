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


Route::get('/', 'SitesController@index')->name('homePage');      //根目录显示网站首页

Route::get('shuini', 'SitesController@index')->name('homePage');

Route::get('hello.php','SitesController@hello');

Route::get('admin/home','SitesController@showAdminHome')->middleware('auth');

Route::get('logout','SitesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'],function (){
    Route::get('admin_home.blade.php',function (){
        return view ('shuini.admin_home');
    });
    Route::get('new_create_news.php',function (){
        return view('shuini.new_create_news');
    });

    Route::get('news_list.php',function()
    {
        return view('shuini.news_list');
    }
    );
    Route::get('notice_list.php',function (){
        return view('shuini.notice_list');
    }
    );
    Route::get('new_create_questionnaire_template.php',function (){
        return view('shuini.new_create_questionnaire_template');
    }
    );
    Route::get('questionnaire_template.php',function (){
        return view('shuini.questionnaire_template');
    }
    );
    Route::get('register_questionnaire_invite.php',function (){
        return view('shuini.register_questionnaire_invite');
    }
    );
    Route::get('questionnaire_invite.php',function (){
        return view('shuini.questionnaire_invite');
    }
    );
    Route::get('create_user.php',function (){
        return view('shuini.create_user');
    }
    );

    //controller里获取数据 $users
    Route::get('user_list','DaLao@index'
    );
    Route::get('user_list.blade.php','DaLao@index');

    Route::get('port_list.php',function (){
        return view('shuini.port_list');
    }
    );
    Route::get('new_create_port.php',function (){
        return view('shuini.new_create_port');
    }
    );
    Route::get('role_list.php',function (){
        return view('shuini.role_list');
    }
    );
    Route::get('new_create_port.php',function (){
        return view('shuini.new_create_port');
    }
    );
    Route::get('new_create_role.php',function (){
        return view('shuini.new_create_role');
    }
    );
    Route::get('system_parameter.php',function (){
        return view('shuini.system_parameter');
    }
    );

    //删除用户
    Route::get('/del_user/{id}','DaLao@del_user');//对相应的权限没有过滤



    Route::get('/mod_user/{id}','DaLao@mod_user');

    //更新用户信息

   Route::post('/update_user/{id}','DaLao@update_user');

});

//测试用的路由----------start---------------
Route::get("/test", function (){return view( 'test');});

Route::any("/query",'DaLao@multiConditionQuery');

Route::any("cre_user",'DaLao@cre_user');

//测试用的路由----------end---------------
