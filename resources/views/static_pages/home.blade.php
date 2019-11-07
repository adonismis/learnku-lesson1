@extends('layouts.default')
@section('title','首頁')
@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      您現在所看到的 <a href="https://learnku.com/courses/laravel-essential-training">Laravel 入門教學</a> 的示範首頁。
    </p>
    <p>
      一切，從這裡開始。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">頁現在註冊</a>
    </p>
  </div>

@stop

