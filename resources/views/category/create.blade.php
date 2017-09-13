@extends('layouts.app')

@section('content')
    <h1 xmlns="http://www.w3.org/1999/html">Добавить категорию</h1>
    <hr>
    <form method="POST" action="/add/category/">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection