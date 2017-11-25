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
}
