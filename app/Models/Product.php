<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'product_type_id',
        'name',
        'article',
        'min_price',
        'width',
    ];

    public $timestamps = false; // Отключение timestamps полей

    public function productType() : BelongsTo {
        return $this->belongsTo(ProductType::class);
    }

    public function productMaterial() : HasMany
    {
        return $this->hasMany(ProductMaterial::class);
    }
}
