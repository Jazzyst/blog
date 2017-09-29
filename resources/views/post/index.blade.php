@extends('layouts.app')
@section('content')

    @yield('content')




            <div class="col-md-9 blog-main">
                <nav class="blog-pagination">
                    <a class="btn btn-warning btn-custom" href="/posts/create">Добавить статью</a>
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



@endsection