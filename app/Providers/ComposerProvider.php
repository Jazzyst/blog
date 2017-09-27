<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Post;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

class ComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('posts', Post::all());
        View::share('cat', Category::withCount('posts')->get());

        View::share('item', Post::find(1));
        View::share('post', Post::find(1));


        Blade::if('admin', function () {
            return true;
        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
