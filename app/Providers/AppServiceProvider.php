<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register all service providers from libraries's composer.json
        collect(glob(base_path('libraries/*/composer.json')))
            ->map(function ($file) {
                $json = json_decode(file_get_contents($file), true);

                $providers = data_get($json, 'extra.laravel.providers', []);

                collect($providers)->each(fn ($provider) => $this->app->register($provider));
            });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Allowed sub-folders for livewire
        Livewire::setScriptRoute(fn ($handle) => Route::get(parse_url((string) config('app.url'), PHP_URL_PATH).'/livewire/livewire.js', $handle));

        Livewire::setUpdateRoute(fn ($handle) => Route::post(parse_url((string) config('app.url'), PHP_URL_PATH).'/livewire/update', $handle)->middleware('web'));
    }
}
