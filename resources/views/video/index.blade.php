@extends('layouts.app')
@section('content')

    @yield('content')


    <div class="row">

        <div class="col-sm-6 col-md-9">
            <div class="brokers-review">
                <h1>Видео-обзоры брокеров</h1>
                <div class="item-review-wrap">
                    <a href="#" class="item-review"><span>Видео-обзор 24Option</span></a>
                    <a href="#" class="item-review"><span>Видео-обзор 24Option</span></a>
                    <a href="#" class="item-review"><span>Видео-обзор 24Option</span></a>
                    <a href="#" class="item-review"><span>Видео-обзор 24Option</span></a>
                    <a href="#" class="item-review"><span>Видео-обзор 24Option</span></a>
                    <a href="#" class="item-review"><span>Видео-обзор 24Option</span></a>
                </div>
            </div>

        </div>

        @include('layouts.sidebar')

    </div>


@endsection