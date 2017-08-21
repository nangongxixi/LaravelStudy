<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //文章列表
    public function index()
    {
        //return view('article/index');// '/'线或者‘.’都可以表示目录层级
        //return view('article.index');
        //$articlesList = Article::get();
        $articlesList = Article::orderby('id', 'desc')->with('user')->paginate(2);//不传参表示默认页面大小
        return view('article.index')->with('articles', $articlesList);
    }

    //文章详情
    public function show($id)
    {
        $articles = Article::find($id);
        return view('article.show')->with('articles', $articles);
    }

    //新增文章
    public function create()
    {
        return view('article.create');
    }

    //保存文章
    public function storage(Request $request)
    {
        // $_POST['title']
        $title = $request->get('title');//get()方法，能获取$_POST,$_GET数据
        //dd($title);
        //$request->title 也能获取到值

        //验证规则
        $rules = [
            'title' => 'required|min:5|max:10|alpha',
            'content' => 'required'
        ];

        //控制器对请求中的数据进行验证
        $this->validate($request, $rules);

        $result = new Article();
        $result->title = $request->get('title');
        $result->content = $request->get('content');
        $result->view_count = 0;

        //当前登录用户id
        $result->user_id = \Auth::id();

        if ($result->save()) {
            $url = url('articles', $result->id);
            return redirect($url);
        };
    }

}
