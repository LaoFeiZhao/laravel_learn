<?php
/**
 * Created by PhpStorm.
 * User: Eric-Hu
 * Date: 2017/9/6
 * Time: 10:39
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //指定表名
    protected $table = 'student';

    //指定主键
    protected $primaryKey = 'id';

    //自动维护时间戳
    public $timestamps = true;

    //指定允许批量赋值的字段
    protected $fillable = ['name', 'age'];



    function getDateFormat()
    {
        return time();
    }

}