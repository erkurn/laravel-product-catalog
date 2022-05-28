<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Erkurn\LaravelProductCatalog\Models\ProductCatalog;

return new class extends Migration
{
    public function up()
    {
        Schema::create('product_catalogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('product_catalogs', 'id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('sku')->unique()->nullable();
            $table->longText('content')->nullable();
            $table->string('status'); // draft, private, public
            $table->string('type')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('product_meta_catalogs', function(Blueprint $table) {
            $table->id();

            $table->foreignIdFor(ProductCatalog::class);
            $table->string('name');
            $table->string('value');

            $table->timestamps();
            $table->unique(['product_catalog_id', 'name']);
        });
    }
};
