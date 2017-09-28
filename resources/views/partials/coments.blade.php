
<div class="comments">
    <ul class="list-group">
        @foreach($video->comments as $comment)
            <li class="list-group-item">
                @auth
                    <div class="user">
                        <span class="user-avatar"><img src=" {{ $comment->user->avatar ?? null }} " class="circle-img">
                            @foreach($comment->user()->get() as $user)
                                <span class="social-icon">
                                        @if ($user->website == 'vk')
                                        <img src="/img/vk.svg" alt="vkontakte">
                                    @elseif ($user->website == 'fb')
                                        <img src="/img/fb.svg" alt="vkontakte">
                                    @elseif ($user->website == 'ok')
                                        <img src="/img/ok.svg" alt="vkontakte">
                                    @elseif ($user->website == 'gm')
                                        <img src="/img/goo.svg" alt="vkontakte">
                                    @elseif ($user->website == 'tw')
                                        <img src="/img/twitt.svg" alt="vkontakte">
                                    @else

                                    @endif
                                    </span>
                            @endforeach

                        </span>
                        <span class="user-name">{{ $comment->getUserName() }} </span>
                    </div>
                @endauth

                @guest
                        <div class="user">
                        <span class="user-avatar"><img src=" {{ $comment->user->avatar ?? null }} " class="circle-img">
                            @foreach($comment->user()->get() as $user)
                                <span class="social-icon">
                                        @if ($user->website == 'vk')
                                        <img src="/img/vk.svg" alt="vkontakte">
                                    @elseif ($user->website == 'fb')
                                        <img src="/img/fb.svg" alt="vkontakte">
                                    @elseif ($user->website == 'ok')
                                        <img src="/img/ok.svg" alt="vkontakte">
                                    @elseif ($user->website == 'gm')
                                        <img src="/img/goo.svg" alt="vkontakte">
                                    @elseif ($user->website == 'tw')
                                        <img src="/img/twitt.svg" alt="vkontakte">
                                    @else

                                    @endif
                                    </span>
                            @endforeach

                        </span>
                            <span class="user-name">{{ $comment->getUserName() }} </span>
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






@guest

@endguest