<?php
/**
 * Created by PhpStorm.
 * User: Eric Hu
 * Date: 2017/9/4
 * Time: 14:18
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public static function getMember()
    {
        return 'member name is eric';
    }
}