<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->hasManyThrough(Product::class, SubCategory::class)->where('show', true);
    }

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
