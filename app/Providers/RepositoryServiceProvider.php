<?php

namespace App\Providers;

use App\Repositories\Interfaces\IIdentityRepository;
use App\Repositories\IdentityRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IIdentityRepository::class, IdentityRepository::class);
    }

}
