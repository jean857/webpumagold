<?php

namespace App\Providers;

use App\Http\View\Composers\CertificationsComposer;
use App\Http\View\Composers\PlaceComposer;
use App\Http\View\Composers\ServicesComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', PlaceComposer::class);
        View::composer('*', ServicesComposer::class);
        View::composer(['web.pages.home','web.pages.about-us'], CertificationsComposer::class);
    }
}
