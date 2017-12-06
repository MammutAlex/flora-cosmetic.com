<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        View::share('categories', Category::get());
        View::share('lastProducts', Product::orderBy('updated_at', 'desc')->take(3)->get());
        $this->middleware(function ($request, $next) {
            if (session()->has('basket')) {
                View::share('basketList', Basket::find(session('basket')));
            }
            return $next($request);
        });
    }
}
