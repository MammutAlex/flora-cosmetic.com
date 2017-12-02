<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends BaseController
{
    public function index()
    {
        return view('test');
    }

    public function check(Request $request)
    {
        return redirect()->back();
    }
}
