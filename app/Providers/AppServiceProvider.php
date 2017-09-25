<?php

namespace App\Providers;

use App\Category;
use App\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('posts', Post::all());
        View::share('cat', Category::all());

        View::share('item', Post::find(1));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
