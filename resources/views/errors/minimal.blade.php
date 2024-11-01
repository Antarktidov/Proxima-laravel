@extends('layouts.main')
@section('css-js-imports')
<link rel="stylesheet" href="{{asset('/styles/404.css')}}">
@endsection
@section('content')
    <main class="error-404-main">
    <h2 class="error-404-numbers">@yield('code')</h2>
    <h3 class="error-404-h3">@yield('message')</h3>
    <p class="error-404-p">@yield('sub_message')</p>
</main>
@endsection