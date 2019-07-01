<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'name',
        'price',
        'author',
        'year',
        'edition',
        'language',
        'description',
        'rating',
        'category_id'
    ];

    public function images()
    {
        return $this->hasMany('App\Models\ProductImages');
    }

    public function getTop()
    {
        return $this->orderBy('rating')->limit(6)->get();
    }
}
