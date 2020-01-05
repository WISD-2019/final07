<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function member()
    {
        return $this->hasMany(Member::class);
    }

    public function manger()
    {
        return $this->hasMany(Manger::class);
    }
}
