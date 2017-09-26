
<div class="comments">
    <ul class="list-group">
        @foreach($post->comments as $comment)
            <li class="list-group-item">
                @auth
                    <div class="user">
                        <span class="user-avatar"><img src="  ">
                            <span class="social-icon">

                                <img src="/img/vk.svg" alt="">

                                
                                
                            </span>
                        </span>
                        <span class="user-name">{{ $comment->user->name }} </span>
                    </div>
                @endauth

                @guest
                    <div class="user">
                        <span class="user-avatar"><img src="  "> </span>
                        <span class="user-name"> </span>
                    </div>
                @endguest
                {{--<div class="user">--}}
                    {{--<span class="user-avatar"><img src=" {{ $comment->user->avatar }} "> </span>--}}
                    {{--<span class="user-name">{{ $comment->user->name }} </span>--}}
                {{--</div>--}}
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