<!DOCTYPE html>
@extends('layouts.app')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>衣服商城網路購物平台</title>

    <!-- Favicon -->

    <!-- Core Style Css -->
</head>
<body>
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(../img/bg-img/test2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>衣服商城</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h4 class="widget-title mb-30">分類</h4>

                            <!-- Catagories -->
                            <div class="categories">
                                <ul id="menu" class="categories-menu-show">
                                    <!-- Single Item -->
                                    <ul data-toggle="collapse" data-target="#clothe">
                                        <li><a href="{{route('clothe')}}">衣服</a></li>
                                        <br>
                                        <li><a href="{{route('pants')}}">褲子</a></li>
                                        <br>
                                        <li><a href="{{route('coat')}}">外套</a></li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <div class="col-12 col-md8 col-lg-9">
           <div class="shop-grid-product-area">
               <div class="row">
                   <div class="col-12">
                       <div class="product d-flex align-items-center justify-content-sm-between">
                           <!-- Total Products -->
                           <div class="total-products">

                           </div>
                           <!-- Sorting -->
                           <div class="product--soring d-flex">
                               <p>排序</p>
                               <form name="jump">
                                   <select onchange="location=document.jump.menu.options[document.jump.menu.selectedIndex].value;" value="GO" name="menu"><br />
                                       <option value="" selected="selected">價格排序</option>
                                       <option value="{{route('asc')}}">低到高</option>
                                       <option value="{{route('desc')}}">高到低</option>
                                   </select>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="row">

                   @foreach($products as $product)
                       <!-- Single Product -->
                       <div class="col-12 col-sm-6 col-lg-4">
                           <div class="single-product-wrapper">
                                <!-- Product Description -->
                                <div class="product-description">
                                    <span>
                                    {{$product->productname}}
                                    </span>
                                    <a href="{{route('detail'),[$product->id]}}">
                                        <h6> {{$product->productname}}</h6>
                                    </a>
                                    <p class="product-price"> ${{$product->price}}</p>

                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        <!-- Add to Cart -->
                                        <div class="add-to-cart-btn">
                                            <a href="{{route('cart_add'),['id'=>$product->id]}}" class="btn essence-btn">新增至購物車</a>
                                        </div>
                                    </div>
                                </div>
                           </div>
                       </div>
                       @endforeach
               </div>
           </div>
       </div>
    </section>

</body>

</html>
