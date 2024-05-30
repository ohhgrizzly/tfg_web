<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Obra;

class ObrasServiceProvider extends ServiceProvider
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
        // Compartir las obras con todas las vistas
        /*
        view()->composer('*', function ($view) {
            $view->with('obras', Obra::all());
        });
        */
    }
}
