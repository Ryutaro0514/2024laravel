@extends('app')
@section('title')
    サインアップ画面
@endsection
<h1>アカウント作成</h1>
@section('content')
    <form action="{{route("user.signupStore")}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="名前">
        <input type="text" name="password" placeholder="パスワード">
        <button class="btn btn-praimary">作成</button>
    </form>
@endsection