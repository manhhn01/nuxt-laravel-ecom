<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku', 'price', 'sale_price', 'quantity'
    ];

    public function options(){
        return $this->belongsToMany(ProductOption::class, 'product_variant_option');
    }

    public function orders(){
        return $this->belongsToMany(Order::class);
    }

    public function image(){
        return $this->morphOne(ProductImage::class, 'imageable', 'VariantImage');
    }
}
