<div class="hidden-xs hidden-sm col-md-3 blog-sidebar">

   
                    <div class="card">
                        <div class="text-center">
                            @auth()
                            <a href="#"><img src="{{ auth()->user()->getUserAvatar() }}" class="img-circle"/></a>
                            <h3 class="text-center">{{ "Профайл: " }}<a href="/profile/show/{{ auth()->user()->id }}">{{ auth()->user()->name }}</a></h3>
                            <p>Кол-во постов: {{ auth()->user()->posts->count() }}</p>
                            <p> Регистрация : {{ auth()->user()->created_at->diffForHumans() }}</p>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                            @admin()
                            adminpage
                            @endadmin()
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