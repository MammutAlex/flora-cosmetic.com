<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class WebController extends BaseController
{
    public function index()
    {
        return view('welcome', [
            'products' => Product::inRandomOrder()->take(8)->get()
        ]);
    }

    public function categories($id)
    {
        $category = Category::where('url', $id)->firstOrFail();
        $products = $category->products()->paginate(6);
        return view('categories', [
            'category' => $category,
            'products' => $products,
        ]);
    }
}
