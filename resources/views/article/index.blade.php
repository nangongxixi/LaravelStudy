@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ url('articles/create') }}">发表文章</a><br>
        @foreach($articles as $article)
            {{ $article->user->name }}
            {{ $article->created_at }}
            <a href="{{ url('articles',$article->id) }}">{{ $article->title }}</a><br>
        @endforeach
        {{ $articles->links() }}
    </div>
@endsection

