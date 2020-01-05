<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function cart()
    {
        return $this->hasMany(Cartofproduct::class);
    }

    //public function category()
    //{
    //    return $this->belongsTo(Category::class);
    //}
}
