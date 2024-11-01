@extends('layouts.admin-lte-main')
@section('content')
    <div class="p-5">
    <h2 class="">СПИСОК СТУДЕНТОВ</h2>
    @if($students->isNotEmpty())
            <table class="table">
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
                <button type="submit" class="btn btn-danger">УДАЛИТЬ СТУДЕНТА</button>
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
    </div>
@endsection