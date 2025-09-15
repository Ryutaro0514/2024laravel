@extends('app')
@section('title')
    サインイン
@endsection
@section('content')
    <h1>サインイン</h1>
    <a href="{{route("user.signupStore")}}"><button class="btn btn-primary">アカウント作成</button></a>
    <form action="{{ route('user.check') }}" method="post">
        @csrf
        <input name="name" type="text" placeholder="名前">
        <input name="password" type="password" placeholder="パスワード">
        <button class="btn btn-primary">サインイン</button>
        @if (session('message'))
        <div class="alert alert-danger">{{ session('message') }}</div>
        @endif
    </form>
@endsection
