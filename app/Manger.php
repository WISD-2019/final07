<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manger extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
