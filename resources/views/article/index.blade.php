<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
<div>MyBlog</div>
<div>
    <a href="{{ url('/') }}"> 首页</a>
    <a href="{{ url('/articles') }}">文章列表</a>
    <a href="{{ url('/about') }}">关于我们</a>
</div>

<div>
    @foreach($articles as $article)
        <a href="{{ url('articles',$article->id) }}">{{ $article->title }}</a><br>
    @endforeach
</div>

</body>
</html>
