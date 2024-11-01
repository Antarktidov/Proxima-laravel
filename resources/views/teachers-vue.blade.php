@extends('layouts.main')
@section('css-js-imports')
<link rel="stylesheet" href="{{asset('styles/teachers.css')}}">
<script src="https://unpkg.com/vue@3/dist/vue.global.js" defer></script>
<script src="{{asset('scripts/teachers-vue.js')}}" defer></script>
@endsection
@section('content')
<main class="teachers-main">
    <div id="teachers-app">

    </div>
</main>
@endsection