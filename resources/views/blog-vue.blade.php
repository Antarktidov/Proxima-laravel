@extends('layouts.main')
@section('css-js-imports')
<link rel="stylesheet" href="{{asset('styles/blog.css')}}">
<link rel="stylesheet" href="{{asset('styles/blog-vue.css')}}">
<link rel="stylesheet" href="{{asset('styles/bootstrap.css')}}">
<script src="https://unpkg.com/vue@3/dist/vue.global.js" defer></script>
<script src="{{asset('scripts/blog-vue.js')}}" defer></script>
@endsection
@section('content')
<h2 class="blog-list-title-h2">НАШ БЛОГ</h2>
        <div id="blogs-app"></div>
@endsection