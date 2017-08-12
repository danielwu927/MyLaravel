<?php

namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    //
     protected $fillable=[
         'id','name','display_name','description',
     ];



}
