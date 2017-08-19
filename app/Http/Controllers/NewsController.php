<?php

    namespace App\Http\Controllers;

    use App\Article;
    use Illuminate\Http\Request;

    class NewsController extends Controller
    {
        public function index()
        {
            /*
             * 添加数据
            $article = new Article();
            $article->title = 'test2';
            $article->content = 'test content2';
            $article->view_count = 0;
            $result = $article->save(); //insert into articles(...)value(...)
            var_dump($result);//bool(true)
            */

            /*
             * 修改数据
            //查询出这个对象，根据id进行查询
            $article = Article::find(2);
            //dd($article);
            $article->title='new title';
            //将修改后的数据保存到数据库中
            $bool = $article->save(); //update articles set title=? where id=2
            dd($bool); //dd函数，等价于var_dump($val);exit;比var_dump详细些
            */

            /*
             * 删除数据
             //查询出这个对象，根据id进行查询
             //select * articles where id=3
             $article = Article::find(3);
             //delete from articles where id=3
             $bool = $article->delete();
             dd($bool);
            */

            /*
             * 查询数据
             */
            //select * articles
            //$list = Article::get();
            //dd($list);

            //不管结果是一条、还是多条，还是0条，都返回一个集合对象
            $list = Article::where('title', '=', 'aaa')->get();

            //Collection 集合对象， 比数组更好用的对象
            //当成数组一样去使用
            //dd($list[0]);

            //遍历对象
            foreach ($list as $item) {
                //Article对象
                echo $item->id . '<br>';
                echo $item->title . '<br>';
            }


        }
    }



