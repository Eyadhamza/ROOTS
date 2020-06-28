<?php

namespace App\Providers;

use App\Achievement;
use App\Article;
use App\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('events',Event::all());
        view()->share('articles',Article::all());
        view()->share('achievements',Achievement::all());

    }
}
