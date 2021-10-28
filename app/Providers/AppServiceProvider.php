<?php

namespace App\Providers;

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
        collect(\File::allFiles(base_path('libraries/*/Providers')))
            ->map(function ($file) {
                $provider = strtr($file->getFileName(), ['.php' => '']);

                $module = \Str::before($provider, 'ServiceProvider');

                $class = "\\Libraries\\{$module}\\Providers\\{$provider}";

                if (class_exists($class)) {
                    $this->app->register($class);
                }
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
