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
    <div class="comments">
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    {{ $comment->user->name }} &nbsp; <strong>
     {{ $comment->created_at->diffForHumans() }}: &nbsp;
                    </strong>
                    {{ $comment->body }}
                </li>
                @endforeach
        </ul>
    </div>

    @include('comments.create')
@endsection