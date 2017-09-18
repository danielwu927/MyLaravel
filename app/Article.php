<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table='articles';
    protected $primaryKey='title';
    public $timestamps=true;
    //获取时间戳
    protected function getDateFormat()
    {
        return time();
    }
    //格式化时间戳
    protected function asDateTime($value)
    {
        return $value;
    }
}
