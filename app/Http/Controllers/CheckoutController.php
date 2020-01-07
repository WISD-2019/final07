<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class CheckoutController extends Controller{
    public function checkout(Request $request)
    {
        if(Auth::check())
        {
            $total = 0;
            $show = Cart::where('user_id','=',Auth::user()->id)->get();
            foreach ($show as $item)
                $total = $total+$item->price*$item->quantity;
            return view('cehckout',['data'=>$show,'total'=>$item]);
        }
        else
        {
            return redirect(route('login'));
        }

    }

    public function cartdetail()
    {
        $all = 0;
        $data = DB::table('carts')
            ->where('users_id',Auth::user()->id)
            ->get();
        foreach ($data as $s)
        {
            $all = $all + $s ->total;
        }
        return view('checkout',['cehckouts'=> $data,'a'=>$all]);
    }

}
