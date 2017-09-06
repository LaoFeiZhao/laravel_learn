<?php
/**
 * Created by PhpStorm.
 * User: Eric Hu
 * Date: 2017/9/4
 * Time: 14:47
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function add($name, $age)
    {
//        $success = DB::insert(
//            'insert into student(name,age) values (?,?)',
//            [$name, $age]
//        );
//        echo $success;
        for ($i = 0; $i < 10; $i++) {
            DB::insert(
                'insert into student(name,age) values (?,?)',
                ['student' . $i, 14 + $i]
            );
        }
    }

    public function getList()
    {
        $students = DB::select('select * from student');
        return dd($students);
    }

    public function update($id, $age)
    {
        return DB::update('update student set age = ? where id = ?', [$age, $id]);
    }

    public function delete($id)
    {
        return DB::delete('delete from student where id = ?', [$id]);
    }

//    <<<<<<<<<<<<<<<<查询构造器

    public function query1()
    {
        $result = DB::table('student')->insert([
            'name' => 'hubin',
            'age' => '18'
        ]);
        var_dump($result);
    }
}