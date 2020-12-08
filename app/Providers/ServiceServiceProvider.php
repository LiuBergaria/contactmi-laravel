<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{

    protected $implementationPath = 'App\\Services\\';
    protected $interfacePath      = 'App\\Services\\Contracts\\';

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
        if (!file_exists(app_path('Services/Contracts'))) {
            return false;
        }

        $interfaces = collect(scandir(app_path('Services/Contracts')));

        $interfaces = $interfaces->reject(function ($interface) {
            return in_array($interface, ['.', '..']);
        })
            ->map(function ($interface) {
                return str_replace('.php', '', $interface);
            });

        $interfaces->each(function ($interface) {
            $serviceName = str_replace('Interface', '', $interface);

            $this->app->bind(
                $this->interfacePath . $interface,
                $this->implementationPath . $serviceName
            );
        });
    }
}
