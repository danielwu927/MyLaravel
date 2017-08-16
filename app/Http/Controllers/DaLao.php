<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;
/**
 * 后台部分页面的控制器
 * Class DaLao
 * @package App\Http\Controllers
 * @author  陈德
 */

class DaLao extends Controller
{
//删除用户
  public  function  del_user($id){
    $user= User::where('id',"=",$id)->first();
    $user->delete();

        return $this->index();
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
        $query=User::returnQuery();
        $input=\Illuminate\Support\Facades\Request::all();
        while(list($key,$val)= each($input)) {
         //   echo "This form sheet :key   ".$key."   and value is:". $val."<br />";
            if($key=='_token')
                continue;
            $query->where($key,'LIKE',"%".$val."%");
        }
        dd($query);
    }
}
