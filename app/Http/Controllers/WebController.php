<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Delivery;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;

class WebController extends BaseController
{
    public function index()
    {
        return view('welcome', [
            'products' => Product::inRandomOrder()->take(8)->get()
        ]);
    }

    public function categories($categories, $subcategories = null)
    {
        $category = Category::where('url', $categories)->firstOrFail();
        if ($subcategories === null) {
            $products = $category->products()->paginate(6);
        } else {
            $products = $category->subcategories()->where('url', $subcategories)->firstOrFail()->products()->paginate(6);
        }
        return view('categories', [
            'category' => $category,
            'activeSubcategory' => $subcategories,
            'products' => $products,
        ]);
    }

    public function delivery()
    {
        return view('delivery', [
            'deliveries' => Delivery::get()
        ]);
    }

    public function contacts()
    {
        return view('contacts', [
            'contacts' => Contact::get()
        ]);
    }
}
