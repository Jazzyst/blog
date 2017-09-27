<div class="hidden-xs hidden-sm col-md-3 blog-sidebar">

   
                    <div class="card user-card">
                        <div class="text-center">
                            @auth()
                            {{--<a href="#"><img src="/img/user.svg" class="img-circle"/></a>--}}
                            <div class="user-main-avatar">
                                <a href="#" class="img-change"><img src="{{ auth()->user()->getUserAvatar() }}" class="img-circle"/></a>
                            </div>
                            <div class="users-info">
                                <h3 class="text-center">{{ "Профайл: " }}<a href="/profile/show/{{ auth()->user()->id }}">{{ auth()->user()->name }}</a></h3>
                                <p>Кол-во постов: {{ auth()->user()->posts->count() }}</p>
                                <p> Регистрация : {{ auth()->user()->created_at->diffForHumans() }}</p>
                                <div class="btn-wrap">
                                   <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout">Logout</a>
                                </div>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                                @else

                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                                    @endauth
                            </div>


                        </div>
                        <div class="card" style="margin-top: 50px;">
                            <div class="text-center">
                                <div class="panel-body">
                                    <div class="single category">
                                        <ul class="list-unstyled">
                                            @foreach($cat as $category)

                                                <li><a href="/category/{{$category->id}}" title="">{{$category->name}} <span class="pull-right">{{$category->posts_count}}</span></a></li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>





    </div>
</div>