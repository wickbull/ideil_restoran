<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'product', 'weight', 'price_uah', 'price_usd', 'photo',
    ];
}
