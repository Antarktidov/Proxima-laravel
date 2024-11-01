@extends('layouts.main')
@section('css-js-imports')
<link rel="stylesheet" href="{{asset('styles/study-applied.css')}}">
@endsection
@section('content')
<main class="applied-main">
      <h2 class="congratulations-h2">ПОЗДРАВЛЯЕМ!</h2>
      <p class="successfully-p">Ваша заявка успешно принята!</p>
</main>
@endsection