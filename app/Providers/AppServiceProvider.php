<?php

namespace App\Providers;

use App\Models\Parcel;
use App\Observers\ParcelObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Parcel::observe(ParcelObserver::class);
    }
}