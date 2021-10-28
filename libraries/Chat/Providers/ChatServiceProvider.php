<?php

namespace Libraries\Chat\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ChatServiceProvider extends ServiceProvider
{
    protected $moduleName = 'Chat';

    protected $moduleNameLower = 'chat';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerConfig();

        $this->registerViews();

        $this->registerRoutes();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            $this->getPath('Config/config.php'),
            $this->moduleNameLower
        );
    }

    public function registerViews()
    {
        $this->loadViewsFrom(
            $this->getPath('Resources/views'),
            $this->moduleNameLower
        );
    }

    public function registerRoutes()
    {
        // Web Routes
        Route::middleware('web')->group($this->getPath('Routes/web.php'));

        // Api Routes
        Route::prefix('api')
            ->middleware('api')
            ->group($this->getPath('Routes/api.php'));
    }

    protected function getPath($append = null)
    {
        return base_path("libraries/{$this->moduleName}/" . $append);
    }
}
