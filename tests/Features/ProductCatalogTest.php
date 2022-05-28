<?php

it('can create a model', function() {
    $product = config('product-catalog.model')::factory()->create();

    $this->assertModelExists($product);
});

it ('can attach custom meta data to product', function() {
    /** @var \Erkurn\LaravelProductCatalog\Models\ProductCatalog $product */
    $product = config('product-catalog.model')::factory()->create();

    $product->updateMeta('is_featured', true);
    $this->assertDatabaseHas('product_meta_catalogs', [
        'product_catalog_id'    =>  $product->getAttribute('id'),
        'name'  =>  'is_featured',
        'value' =>  true
    ]);

    $product->updateMeta('is_featured', false);
    $this->assertDatabaseHas('product_meta_catalogs', [
        'product_catalog_id'    =>  $product->getAttribute('id'),
        'name'  =>  'is_featured',
        'value' =>  false
    ]);
});

it('can search by meta', function() {
    /** @var \Erkurn\LaravelProductCatalog\Models\ProductCatalog $product */
    $products = config('product-catalog.model')::factory(10)->create();
    $products->each(function(\Erkurn\LaravelProductCatalog\Models\ProductCatalog $product, $key) {
        $product->updateMeta('searchable-key', 'product-' . $key + 1);

        $result = \Erkurn\LaravelProductCatalog\Models\ProductCatalog::byMetaName('searchable-key', 'product-' . $key + 1);
        $this->assertEquals($product->id, $result->id);

        $result = \Erkurn\LaravelProductCatalog\Models\ProductCatalog::byMetaValue('product-' . $key + 1);
        $this->assertEquals($product->id, $result->id);
    });
});
