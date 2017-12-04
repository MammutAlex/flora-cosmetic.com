<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Buy;
use App\Product;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class BasketController extends WebController
{
    private const BUY_NOW = 'buy';

    public function cart()
    {
        return view('cart', ['basket' => $this->getBasket()]);
    }

    public function checkCart(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|string|min:17|max:17',
            'name' => 'required|string',
        ]);
        $backet = $this->getBasket();
        $backet->update([
            'phone' => $request->phone,
            'name' => $request->name,
            'comment' => $request->comment,
            'send' => new \DateTime(),
        ]);
        $this->sendToTelegram($backet);
        session()->forget('basket');
        return redirect()->back()->with('success', 'Ваше замовлення прийнято, ми зателефонуємо вам');
    }

    public function buy(Product $products, Request $request)
    {
        $this->validate($request, [
            'type' => 'required|string',
            'config' => 'required|numeric|min:1|max:5',
        ]);

        if ($request->type === self::BUY_NOW) {
            return $this->buyNow($products, $request);
        }
        return $this->addToBasket($products, $request);

    }

    private function buyNow(Product $products, Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|string|min:17|max:17',
        ]);
        $basket = Basket::create([
            'phone' => $request->phone,
            'send' => new \DateTime(),
        ]);
        Buy::create([
            'basket_id' => $basket->id,
            'product_id' => $products->id,
            'config_id' => $request->config,
        ]);
        $this->sendToTelegram($basket);
        return redirect()->back()->with('success', 'Ваше замовлення прийнято, ми зателефонуємо вам');
    }

    private function addToBasket(Product $products, Request $request)
    {
        $basket = $this->getBasket();

        $buy = Buy::firstOrCreate([
            'basket_id' => $basket->id,
            'product_id' => $products->id,
            'config_id' => $request->config,
        ]);
        $buy->update([
            'amount' => $buy->amount + 1
        ]);
        session(['basket' => $basket->id]);

        return redirect()->back()->with('success', 'Товар добавлений в корзину');
    }

    private function getBasket()
    {
        if (session()->has('basket')) {
            return Basket::find(session('basket'));
        }
        return Basket::create();

    }

    private function sendToTelegram(Basket $basket)
    {
        Telegram::sendMessage([
            'chat_id' => '-276563552',
            'parse_mode' => 'HTML',
            'text' => view('telegram.check', [
                'backet' => $basket
            ])->render(),
        ]);
    }

}
