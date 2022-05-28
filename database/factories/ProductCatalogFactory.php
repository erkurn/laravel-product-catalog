<?php

namespace Erkurn\LaravelProductCatalog\Database\Factories;

use Erkurn\LaravelProductCatalog\Models\ProductCatalog;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductCatalogFactory extends Factory
{
    protected $model = ProductCatalog::class;

    public function definition()
    {
        return [
            'title' =>  $this->faker->sentence(3),
            'slug'  =>  $this->faker->slug(3),
            'status'    =>  'publish'
        ];
    }
}

