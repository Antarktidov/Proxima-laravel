@extends('layouts.main')
@section('css-js-imports')
<link rel="stylesheet" href="{{asset('styles/mainpage.css')}}">
<link rel="stylesheet" href="{{asset('/styles/study-choice-modal.css')}}">
<script src="{{asset('scripts/mainpage.js')}}" defer></script>
@endsection
@section('content')
            <div class="about">
                <p class="p-about">Образовательный центр «Проксима» предоставляет вам второе обучение, но не для диплома, а для души. Здесь вы можете освоить различные IT, творческие специальности и прикоснуться к тайнам мироздания. Мы проводим занятия не в онлайне, а в живую, пока только в пяти городах России</p>
            </div>
            <main class="our-studyes">
                <h2 class="our-studyes-h2">НАШИ ЗАНЯТИЯ</h2>
                <div class="our-studyes-block">
                    @foreach ($categories as $category)
                    <h3 class="our-studyes-h3">{{$category->title}}</h2>
                    <div class="our-studyes-sub-block">
                        @foreach ($studies as $study)
                        @if ($category->id === $study->category_id)
                        <div class="study-container">
                            <img src="images/{{$study->image}}"
                            class="study-img"
                            alt="test">
                            <div class="study-sub-container">
                                <h4 class="study-name">{{$study->title}}</h4>
                                <p class="study-description">{{$study->description}}</p>
                                <div class="study-sub-sub-container">
                                    <form action="{{route('study.show', $study)}}" method="post">
                                        @csrf
                                        <button for="study" class="study-link study-link-hollow" type="submit" class="">ПРЕПОДАВАЕЛИ</button>
                                        <input class="invisible" type="text" name="study" value="{{$study->department}}">
                                    </form>
                                    <a class="study-link study-link-hollow" href="#">ПРОГРАММА ОБУЧЕНИЯ</a>
                                    <button class="study-button study-link-filled" value="{{$study->id}}">ДОБАВИТЬ ПРЕДМЕТ</button>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </main>
            <!--<php require_once 'components/footer.php';?>-->
            <div class="study-choice-modal invisible">
                <div class="study-choice-on">
                    <span class="study-choice-text">Выбрано предметов</span>
                    <span class="study-choice-number">
                        <span class="study-choice-counter">0</span>/5
                    </span>
                </div>
                <div class="study-choice-progress-bar">
                    <span class="study-choice-progress-bar-filled"></span>
                </div>
                <form action="{{route('study.application')}}" method="post">
                    @csrf
                    <button type="submit" class="study-choice-further-button">ДАЛЕЕ</button>
                    <input class="invisible choiced-studyestext-input" type="text" name="choicedstudyes">
                </form>
            </div>
    </main>
@endsection