<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $guarded = [];

    public function buys()
    {
        return $this->hasMany(Buy::class);
    }

    public function getPriceAttribute()
    {
        $price = 0;
        foreach ($this->buys as $buy) {
            $price += $buy->product['price_' . $buy->config_id] * $buy->amount;
        }
        return $price;
    }
}
