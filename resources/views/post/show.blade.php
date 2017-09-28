@extends('layouts.app')
@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title"><a href="/posts/show/{{$post->id}}">{{$post->title}}</a></h2>

        <p class="blog-post-meta">{{$post->body}}</p>
        <span class="autor">Опубликовано в <a href="/category/{{$post->category->category_id}}">{{$post->category->name}}</a> {{$post->created_at->toFormattedDateString()}} Пользователем {{ $post->user->name ?? "DELETED" }}
</span>
        <p></p>
        @include('partials.share') <br>

        <a class="btn btn-info" style="padding-bottom: 20px;" href="{{ URL::previous() }}">Назад</a><br>

    </div><!-- /.blog-post -->

    <br>
    @include('partials.post_comments')

    @include('comments.create')
@endsection