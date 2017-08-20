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

<div><br><br>
    <form action="{{ url('articles/create') }}" method="post">
        {{ csrf_field() }}
        <div>
            标题 <input type="text" name="title" value="{{ old('title') }}">
            @if($errors->has('title'))
                {{ $errors->first('title') }}
            @endif
           <br><br>
        </div>
        <div>
            内容 <textarea name="content" cols="30" rows="10">{{ old('content') }}</textarea>
            @if($errors->has('content'))
                {{ $errors->first('content') }}
            @endif
        </div>
        <input type="submit" value="submit">

    </form>
</div>

</body>
</html>
