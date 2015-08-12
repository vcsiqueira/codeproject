<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppRepositoryProvider extends ServiceProvider
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
            \App\Repositories\ClientRepository::class,
            \App\Repositories\ClientRepositoryEloquent::class
        );

        $this->app->bind(
            \App\Repositories\ProjectRepository::class,
            \App\Repositories\ProjectRepositoryEloquent::class
        );

        $this->app->bind(
            \App\Repositories\ProjectNoteRepository::class,
            \App\Repositories\ProjectNoteRepositoryEloquent::class
        );
    }
}
