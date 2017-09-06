<?php
/**
 * Created by PhpStorm.
 * User: Eric-Hu
 * Date: 2017/9/6
 * Time: 10:42
 */

namespace App\Http\Controllers;

use App\Student;

class OrmController extends Controller
{
    public function orm1()
    {
        //all()
//        $students = Student::all();
//        dd($students);

//        $student = Student::find(1001);
//        dd($student);

//        $student = Student::findOrFail(99);
//        dd($student);

//        $students = Student::get();
//        dd($students);

//        $students = Student::where('id', '>', '1001')
//            ->orderBy('age', 'desc')
//            ->first();
//        dd($students);

        //TODO chunk在哪里？
//        echo '<pre>';
//        Student::chunk(2, function ($results) {
//            var_dump($results);
//        });

        //聚合函数
        $num = Student::count();
        var_dump($num);

        Student::where('id', '>', 1001)->max('age');

    }


    public function orm2()
    {
//        $this->saveDemo();

        $this->createDemo();
    }

    private function saveDemo()
    {
        //使用模型新增数据
        $student = new Student();
        $student->name = 'eric';
        $student->age = 18;
        $bool = $student->save();
        dd($bool);
    }

    private function createDemo()
    {
        //使用create方法新增数据,直接插入数据会出错MassAssignmentException需要在model里指定允许访问的字段名
        $student = Student::create(
            ['name' => 'eric2', 'age' => '19']
        );
        dd($student);
    }

    private function firstOrCreateDemo()
    {
        Student::firstOrCreate(['name' => 'imooc']);

        Student::firstOrNew(['name' => 'imoocs']);
    }

    public function orm3()
    {
        //通过模型更新数据
        $student = Student::find(1003);
        $student->name = 'kitty';
        $bool = $student->save();
        var_dump($bool);

        //结合查询语句，批量更新
        $num = Student::where('id', '>', 1019)->update(
            ['age' => 26]
        );
        var_dump($num);
    }

    public function orm4()
    {
        //通过模型删除
        $student = Student::find(1001);
        $bool = $student->delete();
        var_dump($bool);

        //通过主键删除
        Student::destroy(1020, 1021);
        Student::destroy([1020, 1021]);

        //删除指定条件数据
        $num = Student::where('id', '>', 1011)->delete();
        var_dump($num);
    }

}