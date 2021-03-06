<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    //public function category()
    //{
    //    return $this->belongsTo(Category::class);
    //}

    public function manger()
    {
        return $this->hasMany(Manger::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
