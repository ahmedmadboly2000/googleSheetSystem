<?php

namespace App\Providers;
use App\Services\GoogleSheetsService;
use Illuminate\Support\ServiceProvider;
use Google_Service_Sheets;
use Google_Client;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
{
    $this->app->singleton(GoogleSheetsService::class, function ($app) {
        return new GoogleSheetsService();
    });
}

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
