<?php

namespace App\Providers;

use App\Repository\User\UserRepo;
use App\Repository\User\UserContract;
use App\Repository\Product\ProductRepo;
use Illuminate\Support\ServiceProvider;
use App\Repository\Cart\CartSessionRepo;
use App\Repository\Cart\CartInterfaceRepo;
use App\Repository\Product\ProductContract;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
