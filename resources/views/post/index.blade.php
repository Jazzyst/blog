@extends('layouts.app')
@section('content')

    @yield('content')
    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">
                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="/posts/create">Написать что нибудь</a>
                </nav>



                @foreach($posts as $item)
                    @include('post.item')
                @endforeach


                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Назад</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Вперед</a>
                </nav>

            </div>

            @include('layouts.sidebar')

        </div>

    </div>
@endsection