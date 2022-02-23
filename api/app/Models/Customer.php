<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dob',
        'avatar',
        'email',
        'password',
        'gender',
        'phone'
    ];

    public function wishlistProducts(){
        return $this->belongsToMany(Product::class, 'wishlist_product')->where('status', 1);
    }

    public function cartProducts(){
        return $this->belongsToMany(Product::class, 'cart_product')->where('status', 1);
    }

    public function addresses(){
        return $this->hasMany(Address::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
