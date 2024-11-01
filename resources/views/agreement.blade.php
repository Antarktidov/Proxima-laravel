@extends('layouts.main')
@section('css-js-imports')
<link rel="stylesheet" href="{{asset('styles/agreement.css')}}">
@endsection
@section('content')
<main class="dogovor-main">
    <h2 class="dogovor-h2">ДОГОВОР ОБ ОБУЧЕНИИ</h2>
    <p class="dogovor-text">
    {{$file}}
    </p>
</main>
@endsection