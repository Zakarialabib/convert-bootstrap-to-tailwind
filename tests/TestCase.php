<?php

namespace Zakarialabib\ConvertBootstrapToTailwind\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Zakarialabib\ConvertBootstrapToTailwind\ConvertBootstrapToTailwindServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Zakarialabib\\ConvertBootstrapToTailwind\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ConvertBootstrapToTailwindServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_convert-bootstrap-to-tailwind_table.php.stub';
        $migration->up();
        */
    }
}
