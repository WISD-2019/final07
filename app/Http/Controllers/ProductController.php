<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    //購物商城
    public function shop()
    {
        $data = Product::all();
        return view('shop',['products' => $data]);
    }

    //價格排序
    public function asc()
    {
        $data = Product::orderBy('asc')->get();
        return view('shop',['products' => $data]);
    }
    public function desc()
    {
        $data = Product::orderBy('desc')->get();
        return view('shop',['products' => $data]);
    }
    public function price($type)
    {
        $data = Product::orderBy('price',$type)->get();
        return view('shop',['products' => $data]);
    }

    //搜尋
    public function search(Request $request)
    {
        $search = $request->input('search');
        $show = Product::where('productname','like','%'.$search.'%')->all();
        return view('shop',['products'=>$show,'search'=>$search]);
    }

    //衣服分類
    public function clothe()
    {
        $data = DB::table('Products')
            ->where('products.type','=','clothe')
            ->get();
        return view('shop',['products'=>$data]);
    }

    //褲子分類
    public function pants()
    {
        $data = DB::table('Products')
            ->where('products.type','=','pants')
            ->get();
        return view('shop',['products'=>$data]);
    }

    //外套分類
    public function coat()
    {
        $data = DB::table('Products')
            ->where('products.type','=','coat')
            ->get();
        return view('shop',['products'=>$data]);
    }
}
