<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {

        View::share('categories', Category::get());
        View::share('lastProducts', Product::orderBy('created_at')->take(3)->get());
    }
}
