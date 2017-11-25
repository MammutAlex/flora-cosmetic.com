<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Buy;
use App\Product;
use Illuminate\Http\Request;

class BasketController extends WebController
{
    public function buy(Product $products, Request $request)
    {
        $this->validate($request, [
            'type' => 'required|string',
            'product' => 'required|numeric|min:1|max:5',
        ]);

        $price_type = 'price_' . $request->product;
        $config_type = 'config_' . $request->product;
        if ($request->type === 'buy') {
            return $this->buyNow($products, $request, $price_type, $config_type);
        }
        return $this->addToBasket($products, $request, $price_type, $config_type);

    }

    private function buyNow(Product $products, Request $request, $price_type, $config_type)
    {
        $this->validate($request, [
            'phone' => 'required|string|min:17|max:17',
        ]);
        $basket = Basket::create([
            'phone' => $request->phone,
        ]);
        Buy::create([
            'basket_id' => $basket->id,
            'product_id' => $products->id,
            'price' => $products->$price_type,
            'config' => $products->$config_type,
        ]);
        return redirect()->back()->with('success', 'Ваше замовлення прийнято, ми зателефонуємо вам');
    }

    private function addToBasket(Product $products, Request $request, $price_type, $config_type)
    {
        $basket = null;
        if (session()->has('basket')) {
            $basket = Basket::find(session('basket'));
        }
        if ($basket === null) {
            $basket = Basket::create();
        }
        Buy::create([
            'basket_id' => $basket->id,
            'product_id' => $products->id,
            'price' => $products->$price_type,
            'config' => $products->$config_type,
        ]);
        session(['basket' => $basket->id]);
        return redirect()->back()->with('success', 'Товар добавлений в корзину');
    }

}
