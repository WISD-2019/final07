<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::check()) {
            $all = 0;
            $data = DB::table('carts')
                ->where('member_id', Auth::user()->id)
                ->get();
            foreach ($data as $s) {
                $all = $all + $s->total;
            }
            return view('cart', ['carts' => $data, 'a' => $all]);
        }
        else
        {
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update($id,$q)
    {
        //
        $cost = DB::table('carts')->where('id',$id)->value('cost');
        DB::table('carts')
            ->where('id',$id)
            ->update([
                'qty' => $q,
                'total' =>$cost * $q
            ]);
        return redirect()->route('cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function add($id)
    {
        if (Auth::check())
        {
            $product = DB::table('products')->where('id', $id)->value('productname');
            $price = DB::table('products')->where('id', $id)->value('price');
            DB::table('carts')->insert(
                [
                    'product'=>$product,
                    'cost'=>$price,
                    'total'=>$price,
                    'member_id'=>Auth::user()->id
                ]
            );
            return Redirect::to(url()->previous());
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function delete($id)
    {
        Cart::destroy($id);
        return redirect()->route('cart');
    }


}
