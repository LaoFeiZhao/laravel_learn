<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('basic1', function () {
    return 'basic1';
});

Route::post('basic2', function () {
    return 'Basic2';
});

//多请求路由
Route::match(['get', 'post'], 'match', function () {
    return 'match';
});

Route::any('any', function () {
    return 'any';
});

//路由参数
Route::get('/parameters/{id}', function ($id) {
    return 'parameters-id:' . $id;
});

Route::get('/parameters/{name?}', function ($name = 'defaultName') {
    return 'parameters-name:' . $name;
});

Route::get('parameters/{id}/{name?}', function ($id, $name) {
    return 'parameters-id:  ' . $id . '</br>  parameters-name:    ' . $name;
})->where(['id' => '[0-9+]', 'name' => '[A-Za-z]+']);

//路由别名
Route::get('user/center', ['as' => 'center', function () {
    return route('center');
}]);

//路由群组
Route::group(['prefix' => 'member'], function () {
    Route::any('any', function () {
        return 'member any';
    });

    Route::get('center', function () {
        return 'member center';
    });
});

//路由中输出视图
Route::get('view', function () {
    return view('welcome');
});

//控制器
Route::get('member/info/{id?}', 'MemberController@info');

Route::get('student/add/{name?}/{age?}', 'StudentController@add');
Route::get('student/list', 'StudentController@getList');
Route::get('student/update/{id}/{age}', 'StudentController@update');
Route::get('student/delete/{id}', 'StudentController@delete');

//orm learn
Route::get('orm1', 'OrmController@orm1');
Route::get('orm2', 'OrmController@orm2');
Route::get('orm3', 'OrmController@orm3');