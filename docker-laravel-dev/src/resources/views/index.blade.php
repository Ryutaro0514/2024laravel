@extends('app')
@section('title')
    HOME
@endsection
@section('content')
    <h1 class="fs-1">HOME</h1>
    <div class="fs-2 flex-column">
        <a href="{{ route('event') }}">イベント</a>
        <a href="{{ route('spot') }}">スポット</a>
        <a href="{{ route('log') }}">ログ</a>
    </div>
@endsection
