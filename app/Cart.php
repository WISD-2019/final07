<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public function member()
    {
        return $this->hasOne(Member::class);
    }

    //public function prodcut()
    //{
    //    return $this->hasMany(Cartofproduct::class);
    //}
}
