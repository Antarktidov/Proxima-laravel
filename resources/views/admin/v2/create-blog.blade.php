@extends('layouts.admin-lte-main')
@section('content')
    <div class="p-5">
        <h2>СОЗДАТЬ БЛОГ</h2>
        <form class="" action="{{route('blogs.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" name="title" class="form-control" id="title">
              </div>
              <div class="form-group">
                <label for="content">Текст блога</label>
                <textarea name="content" class="form-control" id="content"></textarea>
              </div>
              <div class="">
                Выберите изображение для блога
                <input class="form-control" type="file" name="image" id="image">
              </div>
              <button type="submit" class="mt-4 btn btn-primary">Создать блог</button>
        </form>
    </div>
@endsection