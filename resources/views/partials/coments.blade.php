
<div class="comments">
    <ul class="list-group">
        @foreach($video->comments as $comment)
            <li class="list-group-item">
<<<<<<< HEAD
                <div class="user">
                    @auth()
                    <span class="user-avatar"><img src=" {{ $comment->getUserAvatar() }} "> </span>
                    <span class="user-name">{{ $comment->getUserName() }} </span>
                        @endauth()
                </div>
=======

                @auth
                    <div class="user">
                        <span class="user-avatar"><img src="  ">
                            <span class="social-icon">
                                @vk()
                                <img src="/img/vk.svg" alt="">
                                @endvk()
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
>>>>>>> 6dd6af3f6285e98359e11e796a2414ab39b51daa
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






@guest

@endguest