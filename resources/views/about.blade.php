@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ url('/news') }}">关于我们</a> {{ $name }}{{ $age }}
    </div>
@endsection