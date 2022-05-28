<?php
namespace Erkurn\LaravelProductCatalog\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductMetaCatalog extends Model
{
    protected $guarded = [];

    protected $table = 'product_meta_catalogs';

    public function product() : BelongsTo
    {
        return $this->belongsTo(ProductCatalog::class, 'product_catalog_id');
    }
}
