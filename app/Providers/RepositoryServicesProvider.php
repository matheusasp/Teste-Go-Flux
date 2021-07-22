<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServicesProvider extends ServiceProvider
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
            'App\Repository\ClienteRepositoryInterface',
            'App\Repository\ClienteRepository',
        );

        //Embarcador
        $this->app->bind(
            'App\Repository\EmbarcadorRepositoryInterface',
            'App\Repository\EmbarcadorRepository',
        );

        //Transportador
         $this->app->bind(
            'App\Repository\TransportadorRepositoryInterface',
            'App\Repository\TransportadorRepository',
        );

        //Lance
        $this->app->bind(
            'App\Repository\LanceRepositoryInterface',
            'App\Repository\LanceRepository',
        );

        //Oferta
        $this->app->bind(
            'App\Repository\OfertaRepositoryInterface',
            'App\Repository\OfertaRepository',
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
