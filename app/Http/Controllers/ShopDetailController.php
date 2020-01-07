<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;


class ShopDetailController extends Controller
{
    public function detail($id)
    {
        $data=Product::where('id','=',$id)->get();
            return view('product-details',['products'=>$data]);
    }

    public function show()
    {
        $data = Product::where('id',1)->get();
        return view('product-details',['products'=>$data]);
    }
}
