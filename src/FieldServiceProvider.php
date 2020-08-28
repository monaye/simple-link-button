<?php

namespace Monaye\SimpleLinkButton;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__.'/../config/simple-link-button.php' => config_path('simple-link-button.php'),
        ]);

        Nova::serving(function (ServingNova $event) {
            Nova::script('simple-link-button', __DIR__.'/../dist/js/field.js');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/simple-link-button.php', 'simple-link-button'
        );
    }
}
