@extends('layouts.main')
@section('css-js-imports')
<link rel="stylesheet" href="{{asset('styles/teachers.css')}}">
<style class="teacher-city-styles" type="text/css">
    </style>
    <style class="teacher-studyes-styles" type="text/css">/*
        <php /*$teacherstudyes = test_input($_POST["teacher-studyes"]);?>
        .teacher-card:not([data-teacher-studyes*=""]) {
            display: none;
        }*/
        @isset($study)
        .teacher-card:not([data-teacher-studyes*="{{$study}}"]) {
            display: none;
        }
        @endisset
    </style>
<script src="{{asset('scripts/teachers.js')}}" defer></script>
@endsection
@section('content')
<main class="teachers-main">
<form class="rendered-form">
    @csrf
            <div class="rendered-form-block">
                <div class="rendered-form-sub-block">
                <label class="">Город</label>
                    <select class="city-options"  name="city" id="">
                        <option value="all">Все</option>
                        <option value="Санкт-Петербург">Санкт-Петербург</option>
                        <option value="Москва">Москва</option>
                        <option value="Владивосток">Владивосток</option>
                        <option value="Пермь">Пермь</option>
                        <option value="Омск">Омск</option>
                    </select>
                </div>
                <div class="rendered-form-sub-block">
                <label>Кафедра</label>
                <select class="study-options" name="studies" id="">
                    <option value="all">Все</option>
                    @foreach($teachers as $teacher)
                    @foreach($teacher->studies as $study)
                    <option value="{{$study->department}}">{{$study->department}}</option>
                    @endforeach
                    @endforeach
                    <!--<option value="js-study">Кафедра JavaScript-разработки</option>
                    <option value="programers-mindset">Кафедра мышления программиста</option>
                    <option value="unity-study">Кафедра Unity-разработки</option>
                    <option value="oop-study">Кафедра объектно-ориентированного программирования</option>
                    <option value="physics-study">Кафедра физики</option>
                    <option value="uiux-study">Кафедра UI/UX дизайна</option>
                    <option value="motion-study">Кафедра моушен-дизайна</option>
                    <option value="marketing-study">Кафедра маркетинга</option>
                    <option value="management-study">Кафедра менеджмента</option>
                    <option value="philopsophy-study">Кафедра философии</option>
                    <option value="quantum-study">Кафедра квантовой физики</option>
                    <option value="3d-study">Кафедра 3D-художников</option>
                    <option value="2d-study">Кафедра 2D-художников</option>-->
                </select>
                </div>
            </div>
</form>
<div class="teachers-block">            
    @foreach($teachers as $teacher)
    <div class="teacher-card" data-teacher-city="{{$teacher->city}}"
    data-teacher-studyes="@foreach($teacher->studies as $study)
    {{$study->department}}@endforeach">
        <img class="teacher-photo" src="{{asset('images') . '/' . $teacher->image}}">
        <h4 class="teacher-name">{{$teacher->name}}</h4>
        <p class="teacher-studyes">
            @foreach($teacher->studies as $study)
            {{$study->department}}{{$loop->last ? '' : ', '}}
            @endforeach
        </p>
        <span class="teacher-city">{{$teacher->city}}</span>
    </div>
    @endforeach
</div>
</main>
@endsection