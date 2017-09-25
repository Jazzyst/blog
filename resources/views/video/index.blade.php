@extends('layouts.app')
@section('content')

    @yield('content')


    <div class="row">

        <div class="col-sm-6 col-md-9">
            <div class="brokers-review">
                <h1>Видео-обзоры брокеров</h1>
                <div class="item-review-wrap">
                    @foreach($video as $video)
                        <a href="{{$video->id}}" class="item-review"><span>{{ $video->name }}</span></a>
                        @endforeach

                </div>
            </div>

        </div>

        @include('layouts.sidebar')

    </div>


@endsection