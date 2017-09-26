
<div class="comments">
    <ul class="list-group">
        @foreach($video->comments as $comment)
            <li class="list-group-item">
                <div class="user">
                    @auth()
                    <span class="user-avatar"><img src=" {{ $comment->getUserAvatar() }} "> </span>
                    <span class="user-name">{{ $comment->getUserName() }} </span>
                        @endauth()
                </div>
                <div class="user-message">
                    <strong class="message-time">
                        {{ $comment->created_at->diffForHumans() }}: &nbsp;
                    </strong>
                    <span class="user-comment">{{ $comment->body }}</span>
                </div>
                &nbsp;
            </li>
        @endforeach
    </ul>
</div>