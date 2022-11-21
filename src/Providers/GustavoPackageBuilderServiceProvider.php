<?php

namespace GustavoViniciusDeMorais\GustavoPackageBuilder\Providers;

use Illuminate\Support\ServiceProvider;
use GustavoViniciusDeMorais\GustavoPackageBuilder\GustavoPackageBuilder;
use GustavoViniciusDeMorais\GustavoPackageBuilder\Commands\TestCommand;

class GustavoPackageBuilderServiceProvider extends ServiceProvider
{

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                TestCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->app->singleton('gustavo-package-builder', function ($app) {
            return new GustavoPackageBuilder();
        });
    }
}
