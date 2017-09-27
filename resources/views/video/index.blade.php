@extends('layouts.app')
@section('content')

    @yield('content')




        <div class="col-md-9">
            <div class="brokers-review">
                <h1>Видео-обзоры брокеров</h1>
                <div class="item-review-wrap">
                    @foreach($video as $video)
                        <a href="/page/{{$video->id}}" class="item-review"><span>{{ $video->name }}</span></a>
                        @endforeach

                </div>
            </div>

        </div>






@endsection