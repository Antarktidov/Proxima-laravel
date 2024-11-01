@extends('layouts.admin-main')
@section('css-js-imports')
<link rel="stylesheet" href="{{asset('/styles/admin-dashboard.css')}}">
<meta name="viewport" content="width=1170">
@endsection
@section('content')
<main class="admin-dashboard-main">
        <h2 class="students-list-h2">СПИСОК СТУДЕНТОВ</h2>
            @if($students->isNotEmpty())
            <table class="students-table">
            <tr>
                <th>id</th><th>Город</th><th>Гражданство</th><th>Имя</th>
                <th>Фамилия</th><th>Отчество</th><th>Телефон</th><th>e-mail</th>
                <th>Предметы</th><th></th>
            </tr>
            <tbody>
            @foreach($students as $student)
            <tr><td>{{$student->id}}</td><td>{{$student->city}}</td><td>{{$student->citizenship}}</td><td>{{$student->name}}</td>
            <td>{{$student->surname}}</td><td>{{$student->patronymic}}</td><td>{{$student->phone_number}}</td>
            <td>{{$student->e_mail}}</td>
            <td>
                @foreach($student->studies as $study)
                {{$study->title}}{{$loop->last ? '' : ', '}}
                @endforeach
            </td>
            <td class="remove-student-td">
            <form action="{{route('student.delete', $student->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="remove-student-btn">УДАЛИТЬ СТУДЕНТА</button>
                <!--<input class="invisible" type="text" name="removable-student-id" value="#">-->
            </form>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            @else
            <p class="empty-table-message">Таблица БД пуста</p>
            @endif
</main>
@endsection