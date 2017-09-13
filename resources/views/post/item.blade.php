<div class="blog-post">
    <h2 class="blog-post-title"><a href="/posts/show/{{$item->id}}">{{$item->title}}</a>
    </h2>Опубликовано в: {{$item->created_at->toFormattedDateString()}}<br>
    Пользователем: <a href="/profile/show/{{$item->user->id}}">{{$item->user->name}}</a><br><br>
    <p class="ArticleBody">
        {{ str_limit(strip_tags($item->body), 50) }}<br>
        @if (strlen(strip_tags($item->body)) > 50)
            <a href="{{ action('PostController@show', $item) }}" class="btn btn-info btn-sm">Читать далее ...</a>
        @endif
    </p>
</div><!-- /.blog-post -->