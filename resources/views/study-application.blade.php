@extends('layouts.main')
@section('css-js-imports')
<link rel="stylesheet" href="{{asset('styles/study-application.css')}}">
<script src="{{asset('scripts/study-application.js')}}" defer></script>
@endsection
@section('content')
<main class="study-application">
        <h2 class="study-application-h2">ЗАЯВКА НА ОБУЧЕНИЕ</h2>
        <form class="rendered-form" action="{{route('study.applied')}}" method="post">
            @csrf
            <div class="rendered-form-city-and-sitizenship rendered-form-block">
                <div class="rendered-form-sub-block">
                    <label class="">Город</label>
                    <select class="" name="city" id="" required>
                        <option value="Санкт-Петербург">Санкт-Петербург</option>
                        <option value="Москва">Москва</option>
                        <option value="Владивосток">Владивосток</option>
                        <option value="Пермь">Пермь</option>
                        <option value="Омск">Омск</option>
                    </select>
                </div>
                <div class="rendered-form-sub-block">
                    <label for="" class="">Гражданство</label>
                    <select class="" name="citizenship" id="" required>
                        <option value="Россия">Россия</option>
                        <option value="США">США</option>
                        <option value="Казахстан">Казахстан</option>
                        <option value="Другое">Другое</option>
                    </select>
                </div>
            </div>
            <div class="rendered-form-block">
                <div class="rendered-form-sub-block">
                    <label for="name" class="">Имя</label>
                    <input type="text" class="" name="name" access="" id="name" required>
                </div>
                <div class="rendered-form-sub-block">
                    <label for="surname" class="">Фамилия</label>
                    <input type="text" class="" name="surname" access="" id="surname" required>
                </div>
                <div class="rendered-form-sub-block">
                    <label for="patronymic" class="">Отчество</label>
                    <input type="text" class="" name="patronymic" id="patronymic" access="">
                </div>
            </div>
            <div class="rendered-form-block">
                <div class="rendered-form-sub-block">
                    <label for="phone-number" class="">номер телефона</label>
                    <input type="tel" class="" name="phone_number" required>
                </div>
                <div class="rendered-form-sub-block">
                    <label for="e-mail" class="">e-mail (необязательно)</label>
                    <input type="e-mail" class="" name="e_mail">
                </div>
            </div>
            <div class="rendered-form-studyes-block">
            <label class="study-application-studyes-label">Предметы</label>
            <span class="study-application-studyes-label-text">Вы выбрали <span class="studyes-number">{{$choicedstudyesArrCount}}</span> <span class="studyes-case">{{$studyesCase}}</span>:</span>
            <div class="study-application-studyes-container">
            @foreach($studies as $study)
            @foreach($choicedstudyesArr as $choicedStudy)
                            @if($study->id == $choicedStudy)
                            <div class="study-application-studyes-name-container" data-study-id="{{$study->id}}">
                                {{$study->title}}
                                <span class="study-application-studyes-name-cross">x</span>
                            </div>
                            @endif
            @endforeach
            @endforeach
            </div>
            <input class="invisible choiced-studyestext-input" value="{{$choicedstudyes}}" type="text" name="choicedstudyes" required>
            </div>
            <div class="">
                <input name="" access="false" id="" value="option-1" type="checkbox" required>
                <label for="">Я прочитал(а) <a class="dogovor-link" href="{{route('agreement.index')}}">договор об обучении</a> и согласен/согласна с ним</label>
            </div>
            <div class="">
                <button type="submit" class="study-application-button" name="" disabled="disabled">ПОДАТЬ ЗАЯВКУ НА ОБУЧЕНИЕ</button>
            </div>
        </form>
    </main>
@endsection