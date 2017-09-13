@extends('layouts.app')

@section('content')
    <h1 xmlns="http://www.w3.org/1999/html">create the post</h1>
    <hr>
    <form method="POST" action="/posts/post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="text">Содержание</label>
            <textarea id="body" name="body" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="text">Категория</label>
            <select class="selectpicker" name="category_id" id="ex-multiselect">
                @foreach($category as $cat)
                    <option value="{{$cat->category_id}}">{{ $cat->name }}</option>
                    @endforeach
            </select>

        </div>
        <button type="submit" class="btn btn-primary">add post</button>
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