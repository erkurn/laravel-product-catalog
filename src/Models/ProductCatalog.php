<?php
namespace Erkurn\LaravelProductCatalog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCatalog extends Model
{
    use SoftDeletes, HasFactory;

    protected $guarded = [];

    protected $table = 'product_catalogs';

    public static function byMetaName($name, $value)
    {
        return ProductMetaCatalog::where('name', $name)
            ->where('value', $value)->first()?->product;
    }

    public static function byMetaValue($value)
    {
        return ProductMetaCatalog::where('value', $value)->first()?->product;
    }

    public function metas() : HasMany
    {
        return $this->hasMany(ProductMetaCatalog::class);
    }

    public function updateMeta($name, $value)
    {
        return $this->metas()->updateOrCreate([
            'name'  =>  $name
        ], [
            'value' =>  $value
        ]);
    }

    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    public function scopePrivate($query)
    {
        return $query->where('votes', 'private');
    }

    public function scopePublic($query)
    {
        return $query->where('votes', 'public');
    }
}
