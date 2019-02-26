<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends BaseController
{
    public function index()
    {
        return view('product.list', [
            'products' => Product::where('show', true)->paginate(6)
        ]);
    }

    public function show(Product $products)
    {
        $moreProducts = Product::where('show', true)->where('sub_category_id', $products->sub_category_id)->inRandomOrder()->take(4)->get();
        return view('product.show', [
            'active' => $products,
            'products' => $moreProducts,
        ]);
    }
}
