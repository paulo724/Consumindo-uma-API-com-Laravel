<?php


namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;


class LecuponProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('Lecupon', function () {
            return Http::withOptions([
                'verify' => false,
                'base_uri' => 'https://jsonplaceholder.typicode.com/',
            ]);
        });
    }
}
