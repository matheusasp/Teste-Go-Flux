<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        //Cliente
        $this->app->bind(
            'App\Providers\ClienteServiceInterface',
            'App\Providers\ClienteService',
        );

        //Embarcador
        $this->app->bind(
            'App\Providers\EmbarcadorServiceInterface',
            'App\Providers\EmbarcadorService',
        );

        //Transportador
        $this->app->bind(
            'App\Providers\TransportadorServiceInterface',
            'App\Providers\TransportadorService',
        );

        //Lance
        $this->app->bind(
            'App\Providers\LanceServiceInterface',
            'App\Providers\LanceService',
        );

        //Oferta
        $this->app->bind(
            'App\Providers\OfertaServiceInterface',
            'App\Providers\OfertaService',
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
