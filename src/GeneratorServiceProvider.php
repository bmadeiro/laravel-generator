<?php

namespace Peaches\Generator;

use Illuminate\Support\ServiceProvider;

class GeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/generator.php';

        $this->publishes([
            $configPath => config_path('generator.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            'Peaches\Generator\Commands\PublishCommand',
            'Peaches\Generator\Commands\MigrationMakeCommand',
            'Peaches\Generator\Commands\ModelMakeCommand',
            'Peaches\Generator\Commands\ScaffoldMakeCommand',
            'Peaches\Generator\Commands\FactoryMakeCommand',
            'Peaches\Generator\Commands\ResourceMakeCommand'
        );
    }
}
