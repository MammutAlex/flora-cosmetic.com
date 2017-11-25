<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends BaseController
{
    public function index()
    {
        return view('product.list', [
            'products' => Product::paginate(6)
        ]);
    }

    public function show(Product $products)
    {
        $moreProducts = Product::where('category_id', $products->category_id)->inRandomOrder()->take(4)->get();
        return view('product.show', [
            'active' => $products,
            'products' => $moreProducts,
        ]);
    }
}
