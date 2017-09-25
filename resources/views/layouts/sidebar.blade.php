<div class="col-sm-6 col-md-5 col-lg-4 blog-sidebar">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="text-center">
                            <a href="#"><img src="https://memini.ru/assets/frontend/images/user.svg" class="img-circle"/></a>
                            @auth()
                            <h3 class="text-center">{{ "Профайл: " }}<a href="/profile/show/{{$item->user->id}}">{{$item->user->name}}</a></h3>
                            <p>Кол-во постов: {{ auth()->user()->posts->count() }}</p>
                            <p> Регистрация : {{ auth()->user()->created_at->diffForHumans() }}</p>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                                    @endauth

                        </div>

                    </div>
                </div>
            </div>
        </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
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
    </div>
</div>