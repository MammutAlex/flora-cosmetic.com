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
        $data = [
            'one' => 0,
            'two' => 0,
            'three' => 0,
            'fore' => 0
        ];
        foreach ($request->text as $value) {
            if ($value == 1) {
                $data['one']++;
            } elseif ($value == 2) {
                $data['two']++;
            } elseif ($value == 3) {
                $data['three']++;
            } elseif ($value == 3) {
                $data['fore']++;
            }
        }
        return redirect()->back()->with('success', array_search(max($data), $data));
    }
}
