<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('order')->orderBy('updated_at', 'desc');
        });
    }


    public function getImagesAttribute($value)
    {
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }


    public function setImagesAttribute($images)
    {
        $this->attributes['images'] = implode(',', $images);
    }

    public function category()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}
