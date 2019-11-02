<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
=======
use Illuminate\Events\Dispatcher;
use TCG\Voyager\Facades\Voyager;
>>>>>>> c8b9454fb61d9feacc39210b1743f3b552ed5e76

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
<<<<<<< HEAD
        Schema::defaultStringLength(191);
=======
        Voyager::addAction(\App\Actions\CsvExportAll::class);
        Voyager::addAction(\App\Actions\CsvExportSelected::class);
>>>>>>> c8b9454fb61d9feacc39210b1743f3b552ed5e76
    }
}
