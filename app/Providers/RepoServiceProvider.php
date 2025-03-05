<?php

namespace App\Providers;

use App\Repository\SiswaRepository;
use App\Repository\RayonRepository;
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
        $this->app->bind(SiswaRepository::class, SiswaImplement::class);
        $this->app->bind(RayonRepository::class, RayonImplement::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
