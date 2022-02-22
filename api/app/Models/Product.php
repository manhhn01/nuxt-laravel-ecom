<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'status'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function coupon(){
        return $this->belongsToMany(Coupon::class);
    }

    public function variants(){
        return $this->hasMany(ProductVariant::class);
    }

    public function attributes(){
        return $this->hasMany(ProductAttribute::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function images(){
        return $this->morphMany(ProductImage::class, 'imageable', 'ProductImages');
    }

    public function cover(){
        return $this->morphOne(ProductImage::class, 'imageable', 'ProductCover');
    }
}
