<?php

namespace App\Providers;

use App\Repository\Repository;
use App\Repository\SiswaImplement;
use App\Repository\RayonImplement;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(Repository::class, SiswaImplement::class);
        $this->app->bind(Repository::class, RayonImplement::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
