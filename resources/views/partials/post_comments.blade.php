
<div class="comments">
    <ul class="list-group">
        @foreach($post->comments as $comment)
            <li class="list-group-item">
                @auth
                    <div class="user">
                        <span class="user-avatar"><img src=" {{ $comment->getUserAvatar() }} ">
                            <span class="social-icon">
                                @vk()
                                <img src="/img/vk.svg" alt="vk">
                                @endvk()
                                @ok()
                                <img src="/img/ok.svg" alt="ok">
                                @endok()
                                @fb()
                                <img src="/img/fb.svg" alt="fb">
                                @endfb()
                                @tw()
                                <img src="/img/twitt.svg" alt="twitt">
                                @endtw()
                                @gm()
                                <img src="/img/goo.svg" alt="google+">
                                @endgm()
                            </span>
                        </span>
                        <span class="user-name">{{ $comment->getUserName() }} </span>
                    </div>
                @endauth

                @guest
                    <div class="user">
                        <span class="user-avatar"></span>
                        <span class="user-name"> </span>
                    </div>
                @endguest
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