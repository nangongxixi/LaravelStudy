@extends('layouts.app')//继承layouts/app.blade.php
@section('content')
    <div class="container">
        {{ $articles->title }}
        <br>
        {{ $articles->content }}
    </div>
@endsection


