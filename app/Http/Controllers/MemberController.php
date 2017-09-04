<?php
/**
 * Created by PhpStorm.
 * User: Eric Hu
 * Date: 2017/9/4
 * Time: 11:47
 */

namespace App\Http\Controllers;

use App\Member;

class MemberController extends Controller
{
    public function info($id = null)
    {
//        return view('member/info',
//            [
//                'name' => 'name' . $id,
//                'age' => 18,
//                'address' => '上海'
//            ]
//        );

        return Member::getMember();
    }
}
