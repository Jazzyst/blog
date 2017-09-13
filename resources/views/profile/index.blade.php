@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-center" style="margin-bottom: 250px;">
                    <div class="text-center">
                        <a href="#"><img src="https://memini.ru/assets/frontend/images/user.svg" class="img-circle"/></a>
                        <h3 class="text-center">{{ "Профайл: " }}{{  $profile->name }}</h3>
                        <p>Кол-во постов: {{ $profile->posts->count() ?? 'Пусто' }}</p>
                        <p> Регистрация : {{ $profile->created_at->diffForHumans() }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
