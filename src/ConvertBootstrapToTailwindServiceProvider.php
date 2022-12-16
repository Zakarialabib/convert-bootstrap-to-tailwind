<?php

namespace Zakarialabib\ConvertBootstrapToTailwind;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Zakarialabib\ConvertBootstrapToTailwind\Commands\ConvertBootstrapToTailwindCommand;

class ConvertBootstrapToTailwindServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('convert-bootstrap-to-tailwind')
            ->hasCommand(ConvertBootstrapToTailwindCommand::class);
    }
}
