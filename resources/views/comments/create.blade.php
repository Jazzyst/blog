<hr>
<form method="POST" action="/comments/add/{{$post->id}}">
    {{csrf_field()}}
    {{--<div class="form-group">--}}
        {{--<label for="text">text of the comment</label>--}}
        {{--<textarea id="body" name="body" class="form-control"></textarea>--}}
    {{--</div>--}}
    {{--<button type="submit" class="btn btn-primary">add comment</button>--}}
{{--</form>--}}
    <div class="card">
        <div class="card-block">
            <form>
                <div class="form-group">
                    <textarea name="body" placeholder="Add coment here." class="form-control">

                    </textarea><br>
                    <button type="submit" class="btn btn-primary">add comment</button>
                </div>
            </form>
        </div>
    </div>
@if(count($errors))
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif