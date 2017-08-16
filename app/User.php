<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Support\Facades\DB;
class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    use Notifiable;
    use EntrustUserTrait;
    protected $fillable = [
        'username', 'email', 'password','role','description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
     * 返回用户角色描述
     */
    public  function  user_role(){

        if($this->hasRole('guest'))
            return  '游客';
        if($this->hasRole('company'))
            return  '水泥厂用户';
        if($this->hasRole('research'))
            return  '课题组成员';
        if($this->hasRole('expert'))
            return  '专家组成员';
        if($this->hasRole('admin'))
            return  '超级管理员';

    }

    public static function  returnQuery(){
      return  DB::table('users');
    }
}
