<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = ['name'];


    public function products()
    {
        return $this->hasMany('App\Models\Product', 'id', 'category_id');
    }

    public function getTop()
    {
        return $this->orderBy('rating')->limit(6)->get();
    }

    public function getProductCount()
    {
        return $this->products()->get();
    }
}
