<?php

namespace App\Providers;

use App\Category;
use App\Post;
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
        view()->composer('includes/navbar', function($view){
            $view->with('categories', Category::all());
        });

        view()->composer('includes/sidebar', function($view){
            $view->with('most_viewed_posts', Post::orderBy('views', 'desc')->take(3)->get());
            $view->with('is_featured', Post::where('is_featured', 1)->orderBy('created_at', 'desc')->take(3)->get());

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
