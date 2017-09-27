@extends('layouts.app')
@section('content')

    @yield('content')



        <div class="col-md-9">
            <div class="video-review">
                <h1>Видео-обзор 24Option</h1>
                <div class="video-wrap">
                    <iframe src="https://www.youtube.com/embed/Cw2Kbp9m5Uo" frameborder="0" allowfullscreen="allowfullscreen" class="embed__item"></iframe>
                </div>
                <div class="video-descr">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dolore, velit, excepturi eaque sapiente facilis, reprehenderit tempore maxime impedit odit nobis odio at, ullam repellendus sunt hic. Quis voluptatum repellat soluta fuga obcaecati earum omnis iusto, sit nulla suscipit tempore officiis tenetur dolores placeat dolore ullam quo in ex sed autem, nesciunt. Maiores sunt sequi consequuntur modi et hic adipisci corporis. Quod ducimus eligendi voluptatum, quas eos in adipisci? A doloremque, numquam optio obcaecati perspiciatis placeat voluptas, provident dignissimos illum voluptate unde facere. Rerum veniam ratione beatae architecto repellendus officiis, corporis suscipit, minus sunt perferendis nihil non quae iure officia.</p>
                </div>
                <hr/>
            </div>
            <div class="social">
                <div class="btn-wrap"><a href="#" class="start-trading">начать торговлю</a></div>
                <div class="social-links">
                    <a href="#" class="vk"></a>
                    <a href="#" class="fb"></a>
                    <a href="#" class="twitt"></a>
                    <a href="#" class="goo"></a>
                    <a href="#" class="ok"></a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="similar-video">
                <h2>Другие видео-обзоры</h2>
                <div class="similar-video-wrap">
                    @foreach($similar as $videos)

                    <a href="/page/{{ $videos->id }}" class="item-review"><span>{{ $videos->name }}</span></a>
                        @endforeach
                </div>
            </div>

            <br>
            @include('partials.coments')

            @include('comments.createvideo')


        </div>

        @include('layouts.sidebar')




@endsection