<?php

namespace App\Providers;

use App\Achievement;
use App\Article;
use App\Event;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use mysql_xdevapi\Exception;

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
        Schema::defaultStringLength(191);
        try {
            view()->share('events',Event::all());
            view()->share('articles',Article::all());
            view()->share('achievements',Achievement::all());
        }
        catch (Exception $exception)
        {

        }

    }
}
