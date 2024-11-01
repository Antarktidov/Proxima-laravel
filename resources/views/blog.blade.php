@extends('layouts.main')
@section('css-js-imports')
<link rel="stylesheet" href="{{asset('styles/blog.css')}}">
<link rel="stylesheet" href="{{asset('styles/bootstrap.css')}}">
@endsection
@section('content')
<h2 class="blog-list-title-h2">НАШ БЛОГ</h2>
@foreach($blogs as $blog)
        <div class="blog-item">
            <div class="blog-sub-item">
                <h3 class="blog-item-title"><a href="{{route('blogs.getBlog', $blog->id)}}">{{$blog->title}}</a></h3>
                <p class="blog-item-text">{{$blog->content}}</p>
            </div>
            <a href="{{route('blogs.getBlog', $blog->id)}}"><img class="blog-item-image"
            src="{{asset('storage/images/blog'. '/' . $blog->image)}}"></a>
        </div>
@endforeach
<div>{{$blogs->links()}}</div>
@endsection