<?php

namespace App;

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
    ];
}
