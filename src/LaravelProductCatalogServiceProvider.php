<?php

namespace Erkurn\LaravelProductCatalog;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Erkurn\LaravelProductCatalog\Commands\LaravelProductCatalogCommand;

class LaravelProductCatalogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-product-catalog')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_product_catalog_table')
            ->hasCommand(LaravelProductCatalogCommand::class);
    }
}
