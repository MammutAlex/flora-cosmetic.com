<?php

namespace App\Http\Controllers;

use App\Buy;
use App\Product;
use Illuminate\Http\Request;

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

    public function buy(Product $products, Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|string|min:17|max:17',
            'product' => 'required|numeric|min:1|max:5',
        ]);
        $price_type = 'price_' . $request->product;
        $config_type = 'config_' . $request->product;
        Buy::create([
            'phone' => $request->phone,
            'product_id' => $products->id,
            'price' => $products->$price_type,
            'config' => $products->$config_type,
        ]);
        return redirect()->back()->with('success', 'Ваше замовлення прийнято, ми зателефонуємо вам');
    }
}
