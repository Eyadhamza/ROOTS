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
    }
}
