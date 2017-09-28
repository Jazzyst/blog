<div class="blog-post">

    <h2 class="blog-post-title"><a href="/posts/show/{{$item->id}}">{{$item->title}}</a></h2>
    {{--</h2>Опубликовано в: {{$item->created_at->toFormattedDateString()}}<br>--}}
    {{--Пользователем: <a href="/profile/show/{{$item->user->id}}">{{$item->user->name}}</a><br><br>--}}
    <p class="ArticleBody">
        {{ $item->body }}<br>
    </p>
    <div class="btn-post-wrap">
        <a href="{{ action('PostController@show', $item) }}" class="btn btn-info btn-sm">Читать далее ...</a>
        <a href="#" class="btn btn-info btn-sm btn-danger">Удалить</a>
    </div>

</div><!-- /.blog-post -->