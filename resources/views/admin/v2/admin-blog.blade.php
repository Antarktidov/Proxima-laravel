@extends('layouts.admin-lte-main')
@section('admin-css-js-imports')
<script src="{{asset('scripts/admin-update-blog.js')}}" defer></script>
@endsection
@section('content')
<h2 class="blog-list-title-h2 p-5">Список блогов</h2>
@foreach($blogs as $blog)
        <div class="blog-item m-5 blog-item-id-{{$blog->id}}">
            <div class="blog-sub-item">
                <h3 class="blog-item-title"><a href="{{route('blogs.getBlog', $blog->id)}}">{{$blog->title}}</a></h3>
                <p class="blog-item-text">{{$blog->content}}</p>
            </div>
            <a href="{{route('blogs.getBlog', $blog->id)}}"><img style="max-width: 50%;" class="blog-item-image img-thumbnail"
            src="{{asset('storage/images/blog'. '/' . $blog->image)}}"></a>;
            <div class="mt-4" style="display: flex;">
            <button class="btn btn-primary mr-3 edit-blog-btn" data-blog-id-edit-blog-btn="{{$blog->id}}">Редактировать</button>
            <form action="{{route('blogs.delete', $blog->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
            </div>
        </div>
        <div class="pl-5 hidden edit-blog-item-id-{{$blog->id}}">
            <h2>Отредактировать блог</h2>
            <form class="" action="{{route('blogs.update', $blog->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{$blog->title}}">
                  </div>
                  <div class="form-group">
                    <label for="content">Текст блога</label>
                    <textarea name="content" class="form-control" id="content">{{$blog->content}}</textarea>
                  </div>
                  <div class="">
                    <img style="max-width: 25%;" class="blog-item-image img-thumbnail blog-item-edit-image"
                    src="{{asset('storage/images/blog'. '/' . $blog->image)}}">
                    <div class="mt-3 mb-3">Если хотите оставить изображение без изменений, оставтье поле выбора изображений пустым.
                    </div>
                    <input class="form-control image-input" type="file" name="image" id="image">
                  </div>
                  <div class="mt-4" style="display: flex;">
                  <button type="submit" class="mt-4 mr-3 btn btn-primary">Сохранить блог</button>
                  <button class="mt-4 btn btn-danger btn-editblog-exit">Выйти из редактирования блога</button>
                  </div>
            </form>
        </div>
@endforeach
<div class="m-5"">{{$blogs->links()}}</div>
@endsection