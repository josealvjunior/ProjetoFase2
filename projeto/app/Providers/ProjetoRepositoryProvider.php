<?php

namespace project\Providers;

use Illuminate\Support\ServiceProvider;

class ProjetoRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \project\Repositories\ClientRepository::class,
            \project\Repositories\ClientRepositoryEloquent::class
        );

        $this->app->bind(
            \project\Repositories\ProjectsRepository::class,
            \project\Repositories\ProjectsRepositoryEloquent::class
        );

    }


}
