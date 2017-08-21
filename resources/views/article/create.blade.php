@extends('layouts.app')
@section('content')
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
@endsection