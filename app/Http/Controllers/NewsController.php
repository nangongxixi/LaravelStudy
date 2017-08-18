<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $name = '<span style="color:red">红色的字</span>';
        return view('news')->with('name',$name);
    }
}
