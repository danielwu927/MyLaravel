<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
=======
use App\Questionnaire;
use Illuminate\Http\Request;
use  App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Array_;
>>>>>>> 5480d2f1edfdaa91e77dfafcb291ff6d617890ab

/**
 * 后台部分页面的控制器
 * Class DaLao
 * @package App\Http\Controllers
 * @author  陈德
 */

class DaLao extends Controller
{

    //第三方网站的form表单数据
    /**
     * 然后存到数据库
     *"q3_input3" => "bi_qyName"
    "q4_input4" => "bi_qyAddress"
    "q5_input5" => "bi_linkman"
    "q6_input6" => "bi_phoneNumber"
    "q7_input7" => "bi_scLineName"
    "q8_input8" => "bi_scLineScale"
    "q9_input9" => "scxLb"
     *
     */
    public function getdata(Request $request){
        $input=\Illuminate\Support\Facades\Request::all();

        $q=new Questionnaire();
        $q->bi_qyName=$request->q3_input3;

        $q->bi_qyAddress=$request->q4_input4;

        $q->bi_linkman=$request->q5_input5;

        $q->bi_phoneNumber=$request->q6_input6;
        $q->bi_scLineName=$request->q7_input7;

        $q->bi_scLineScale=$request->q8_input8;

        $q->scxLb=$request->q9_input9;

        //``````````分割线 第一页存储完毕````````





        //````````````第二页存储问卷```````````````
     /*   q15_input15" => "[{"原材料名称":"zyxh_sl_yclName_0","消耗情况(万吨/年)":"zyxh_sl_yclXhqk_0"},{"原材料名称":"zyxh_sl_yclName_1","消耗情况(万吨/年)":"zyxh_sl_yclXhqk_1"}]"
  "q17_input17" => "[{"燃料名称":"zyxh_rl_yclName_0","消耗情况(万吨/年)":"zyxh_rl_yclXhqk_0"}]"
  "q19_input19" => "zyxh_slcl_shuliao"
  "q18_input18" => "[{"材料名称":"zyxh_sl_yclName_10","消耗情况(万吨/年)":"zyxh_sl_yclXhqk_10"},{"材料名称":"zyxh_sl_yclName_11","消耗情况(万吨/年)":"zyxh_sl_yclXhqk_11"}]"
  "q20_input20" => "zyxh_slcl_shuini"
*/
        $q->zyxh_slcl_shuliao=$request->q19_input19;

        $q->zyxh_slcl_shuini=$request->q20_input20;


             $input18=json_decode($request->q18_input18,true);
             $len2=count($input18);
             $zyxh_sl_yclName_1='zyxh_sl_yclName_1';
             $zyxh_sl_yclXhqk_1='zyxh_sl_yclXhqk_1';
             for ($z=0;$z<$len2;$z++){
                 $z_temp1= $zyxh_sl_yclName_1.$z;
                 $z_temp2=$zyxh_sl_yclXhqk_1.$z;
                 $q->$z_temp1=$input18[$z]['材料名称'] ;
                  $q->$z_temp2=$input18[$z]['消耗情况(万吨/年)'] ;
                   //  echo $q->$z_temp1.'  '.$q->$z_temp2.'<br>';
             }



        $zyxh_sl=json_decode($request->q15_input15,true);
        $len1=count($zyxh_sl);
        $zyxh_sl_yclName_='zyxh_sl_yclName_';
        $zyxh_sl_yclXhqk_='zyxh_sl_yclXhqk_';
        for ($y=0;$y<$len1;$y++){
            $y_temp1=$zyxh_sl_yclName_.$y;
            $y_temp2=$zyxh_sl_yclXhqk_.$y;
            $q->$y_temp1=$zyxh_sl[$y]['原材料名称'];
            $q->$y_temp2=$zyxh_sl[$y]['消耗情况(万吨/年)'];
//            echo $q->$y_temp1.'  '.$q->$y_temp2;
//            echo '<br>';
        }






       $zyxh_rl=json_decode($request->q17_input17,true);
       $arrlength=count($zyxh_rl);
        $str_name='zyxh_rl_yclName_';
        $str_xhqk='zyxh_rl_yclXhqk_';
        for($x=0;$x<$arrlength;$x++) {
            $temp1=$str_name.$x;
            $temp2=$str_xhqk.$x;
            $q->$temp1=$zyxh_rl[$x]['燃料名称'];
            $q->$temp2=$zyxh_rl[$x]['消耗情况(万吨/年)'];

//            echo $zyxh_rl[$x]['燃料名称'].'   '.$zyxh_rl[$x]['消耗情况(万吨/年)'];
//            echo "<br>";
        }

        //```````````第3页```````````````
        /*
         * "q23_input23" => "nyxh_slfmdh"
  "q24_input24" => "nyxh_kbsldh"
  "q25_input25" => "nyxh_dwslfdl"
  "q26_input26" => "nyxh_kbslmh"
  "q27_input27" => "nyxh_kbslnh"
  "q28_input28" => "nyxh_kbsl_zhnh"
  "q29_input29" => "nyxh_dwslyrfdl"
         * */

        $q->nyxh_slfmdh=$request->q23_input23;

        $q->nyxh_kbsldh=$request->q24_input24;

        $q->nyxh_dwslfdl=$request->q25_input25;

        $q->nyxh_kbslmh=$request->q26_input26;

        $q->nyxh_kbslnh=$request->q27_input27;

        $q->nyxh_kbsl_zhnh=$request->q28_input28;
        $q->nyxh_dwslyrfdl=$request->q29_input29;

     //`````````````问卷第四页`````````````````

        $fqpf_klw=$request->q33_input33;
        // 窖头
            $q->fqpf_klw_npfl_yt=$fqpf_klw[0][0];
            $q->fqpf_klw_pfnd_yt=$fqpf_klw[0][1];
        //窑尾
             $q->fqpf_klw_npfl_yw=$fqpf_klw[1][0];
             $q->fqpf_klw_pfnd_yw=$fqpf_klw[1][1];

        //煤磨
             $q->fqpf_klw_npfl_mm=$fqpf_klw[3][0];
             $q->fqpf_klw_pfnd_mm=$fqpf_klw[3][1];

            $fq= $request->q35_input35;
        //二氧化硫
                 $q->fqpf_fq_npfl_so2=$fq[0][0];
                 $q->fqpf_fq_pfnd_so2=$fq[0][1];

        //氮氧化物
                  $q->fqpf_fq_npfl_nox=$fq[1][0];
                  $q->fqpf_fq_pfnd_nox=$fq[1][1];
         //嘘嘘嘘！！！ 水泥磨包装机的没有呀
         //喷氮
        $q->fqpf_pd_sl=$request->q36_Kgt;
        //脱销工艺
        $q->fqpf_txgy= json_encode($request->q37_input37);



        //``````````````问卷第五页``````````````````

        $q->zysb_ygg=$request-> q43_input43;    //窑规格

        $zysb=$request->q41_input41;  //设备情况 的数组
        $q->fmfs0=$zysb[0][0];
        $q->zysb_slm_ggxh0=$zysb[0][1];
        $q->zysb_slm_sl0=$zysb[0][2];
         $q->fmfs2=$zysb[1][0];
         $q->zysb_slm_ggxh10=$zysb[1][1];
         $q->zysb_slm_sl10=$zysb[1][2];

       //``````````````````````````````````````
         $q->save();
      //    dd($input);


    }

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
    //    return  view('shuini.user_list',['message' => '创建新用户成功','users'=>$users]);
        return Redirect::to('admin/user_list');

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
        $users = User::paginate(5);//默认每页显示  ————个用户信息
      //  foreach ( $users as $user)

        return view('shuini.user_list')->with("users",$users);

    }

    /**
     * 多条件模糊查询
     *
     */

    public function multiConditionQuery(){
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
            $handle->where("email",'like',"%".$input['email']."%");
//        else
//            echo  'not set email';



        if($input['username']) $handle->where("username",'like',"%".$input['username']."%");


        //这里会产生一个bug 查询结果在进行分页的时候 会不行 因为
                     return view('shuini.user_list')->with("users",$handle->paginate(1000));//未能够实现分页功能

        //     return view('shuini.user_list')->with("users",$handle->get());//未能够实现分页功能


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

  //   return   Redirect::to('/admin/user_list')->with("users",$handle->paginate(4));


    }
}
