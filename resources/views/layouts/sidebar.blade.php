<div class="col-sm-3 offset-sm-1 blog-sidebar">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-4">
                    <div class="card">
                        <div class="text-center">
                            <a href="#"><img src="https://memini.ru/assets/frontend/images/user.svg" class="img-circle"/></a>
                            <h3 class="text-center">{{ "Профайл: " }}<a href="/profile/show/{{$item->user->id}}">{{$item->user->name}}</a></h3>
                            <p>Кол-во постов: {{ auth()->user()->posts->count() }}</p>
                            <p> Регистрация : {{ auth()->user()->created_at->diffForHumans() }}</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-4">
                        <div class="card" style="margin-top: 50px;">
                            <div class="text-center">
                                <div class="panel-body">
                                    <div class="single category">
                                        <ul class="list-unstyled">
                                            @foreach($cat as $category)

                                                <li><a href="/category/{{$category->id}}" title="">{{$category->name}} <span class="pull-right">12</span></a></li>
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