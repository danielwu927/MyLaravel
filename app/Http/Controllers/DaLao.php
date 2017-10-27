<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

/**
 * 后台部分页面的控制器
 * Class DaLao
 * @package App\Http\Controllers
 * @author  陈德
 */

class DaLao extends Controller
{


    public function  update_user($id)
{
    $input=\Illuminate\Support\Facades\Request::all();
//    echo "id=".$id;
//   dd($input);
//var_dump($input);
        $user=User::find($id);
        $user->username=$input['username'];

        if($input['password']!=null)
        $user->password=bcrypt($input['password']);

        $user->description=$input['description'];
        $user->email=$input['email'];
        $user->status=$input['status'];
        $user->role=$input['role'];
        $user->roles()->attach($input['role']);
        $user->save();
        return Redirect::to('admin/user_list');

}


    /**
     * 修改用户
     * @param $id
     */
    public  function mod_user($id){

        $user=User::where("id","=",$id)->first();

    //    var_dump($user);

        return view("shuini.modify_user")->with("user",$user);
    }


    //新建用户
    public  function  cre_user(){

        $data=\Illuminate\Support\Facades\Request::all();
        $user= User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role'=>$data['role'],
            'description'=>$data['description'],
            'status'=>$data['status'],

        ]);

        $user->roles()->attach($data['role']);
      //  dd($user);
        $users = User::paginate(4);
       // $message="创建新用户成功";
    //    $view = View::make('user_list')->with('message', 'make new user');
        return  view('shuini.user_list',['message' => '创建新用户成功','users'=>$users]);
    }


//删除用户
  public  function  del_user($id){
    $user= User::where('id',"=",$id)->first();
    $user->delete();
      return Redirect::to('admin/user_list');
     //   return $this->index();
    }



    //获取用户表USERS信息
  public  function  index(){
        $users = User::paginate(4);//默认每页显示  ————个用户信息
      //  foreach ( $users as $user)

        return view('shuini.user_list')->with("users",$users);

    }

    /**
     * 多条件模糊查询
     *
     */

    function multiConditionQuery(){
    //    $query = DB::table('users');

//        foreach ($conditions as $condition) {
//            $query->where($condition, 'LIKE' $input($ocndition);
//}
//        $query->get();
//
//    dd($input);
 //   echo '------分割------\n';
//    var_dump($input);
//$ele=$input[1];
//1        $query=User::query();
       $input=\Illuminate\Support\Facades\Request::all();
        $handle=DB::table('users');
//echo  "page=".$_REQUEST['page'];
        if($input['email']!=null)
            echo 'email is set';
        else
            echo  'not set email';

            $handle->where("email",'like',"%".$input['email']."%");

        if($input['username']) $handle->where("username",'like',"%".$input['username']."%");


      //  return redirect()->route('profile', ['users' => $handle->paginate(4)]);
       // $sql=$handle->tosql();
        //$users=$handle->get();

    //  dd($handle->paginate(4));



//        while(list($key,$val)= each($input)) {
//         //   echo "This form sheet :key   ".$key."   and value is:". $val."<br />";
//            if($key=='_token')
//                continue;
//            $query->where($key,'LIKE',"%".$val."%");
//        }
       //    dd($query->first());

     //  $users= User::query($query);
    //  dd($users);

        //  var_dump($users);
//        $user=$query->first();
//        var_dump($user);
  //      var_dump($query->first());
     // $users=$query->get()->paginate(4);;
//     $users=User::query("select * from  users where username='chende'")->get();
     return view('shuini.user_list')->with("users",$handle->paginate(4));//未能够实现分页功能

 //    return   Redirect::to('/admin/user_list')->with("users",$handle->paginate(4));


    }
}
