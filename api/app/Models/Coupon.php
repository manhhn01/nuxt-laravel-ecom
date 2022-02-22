<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'value', 'max_value', 'quantity', 'expire_at'
    ];

    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
