<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        //return view('article/index');// '/'线或者‘.’都可以表示目录层级
        //return view('article.index');
        $articlesList = Article::get();
        return view('article.index')->with('articles',$articlesList);
    }

    public function show($id){
        $articles = Article::find($id);
        return view('article.show')->with('articles',$articles);
    }

}
