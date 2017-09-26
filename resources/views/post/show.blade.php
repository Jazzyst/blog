@extends('layouts.app')
@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title"><a href="/posts/show/{{$post->id}}">{{$post->title}}</a>
        </h2>Опубликовано в <a href="/category/{{$post->category->category_id}}">{{$post->category->name}}</a> {{$post->created_at->toFormattedDateString()}} Пользователем {{ auth()->user()->name }}
        <p class="blog-post-meta">{{$post->body}}</p>
        <p></p>
        <a class="btn btn-info" style="padding-bottom: 20px;" href="{{ URL::previous() }}">Назад</a><br>
    </div><!-- /.blog-post -->

    <br>
    @include('partials.post_comments')

    @include('comments.create')
@endsection