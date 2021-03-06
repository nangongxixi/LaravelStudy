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
    //return 'HI';
    //view是加载resources/views/welcome.blade.php
    $name = '张三';
    return view('welcome')->with('name', $name);
});

Route::get('news', function () {
    //return 'news';
    $name = '<span style="color:red">红色的字</span>';
    return view('news')->with('name', $name);
});

Route::get('about', function () {
    //return 'about';
    // $name = 'zhangsan';
    // return view('about')->with(['name' => $name, 'age' => 18]);

    $name = ['name' => 'zhangsan', 'age' => 18];
    return view('about', $name);

});