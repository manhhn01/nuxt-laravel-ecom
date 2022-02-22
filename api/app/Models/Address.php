<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id', 'city_id', 'address', 'phone'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function orders(){

        return $this->hasMany(Order::class);
    }
}
