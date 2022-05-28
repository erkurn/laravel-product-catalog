<?php

namespace Erkurn\LaravelProductCatalog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Erkurn\LaravelProductCatalog\LaravelProductCatalog
 */
class LaravelProductCatalog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-product-catalog';
    }
}
