<?php

namespace Erkurn\LaravelProductCatalog\Commands;

use Illuminate\Console\Command;

class LaravelProductCatalogCommand extends Command
{
    public $signature = 'laravel-product-catalog';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
