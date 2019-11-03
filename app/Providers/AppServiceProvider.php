<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Events\Dispatcher;
use TCG\Voyager\Facades\Voyager;

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
        Voyager::addAction(\App\Actions\CsvExportAll::class);
        Voyager::addAction(\App\Actions\CsvExportSelected::class);
        Voyager::addAction(\App\Actions\ConvertVolunteerToDonor::class);
        Voyager::addAction(\App\Actions\ConvertDonorToVolunteer::class);
        Voyager::addAction(\App\Actions\ConvertParticipantToVolunteer::class);
    }
}
