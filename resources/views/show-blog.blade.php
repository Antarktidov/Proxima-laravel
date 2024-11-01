@extends('layouts.main')
@section('css-js-imports')
<link rel="stylesheet" href="{{asset('styles/agreement.css')}}">
<style>
    .dogovor-h2 {
    text-transform: uppercase;
}
</style>
@endsection
@section('content')
<main class="dogovor-main">
    <h2 class="dogovor-h2">{{$blog->title}}</h2>
    <p class="dogovor-text">
       {{$blog->content}}
    </p>
</main>
@endsection