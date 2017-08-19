<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //注册中间件
        //auth中间件，是检查是否登录
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取当前登录用户id
        //echo \Auth::id();exit; //因为顶部没有use，所以要加‘\’
        //获取当前登录的用户名
        //echo \Auth::user()->name;exit;

        //没有登录的时候
        if(!\Auth::check()){
            //跳转到login页面
            return redirect('login');
        }

        return view('home');
    }
}
