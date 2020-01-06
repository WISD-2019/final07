<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table ='orders';

    public function member()
    {
        return $this->hasMany(Member::class);
    }

    public function manger()
    {
        return $this->hasMany(Manger::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    protected  $fillable=[
        'name', 'postcode', 'ph_number', 'address', 'created_at', 'updated_at','product_id'
    ];
}
