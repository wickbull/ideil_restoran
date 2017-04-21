<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additionally extends Model
{
    protected $fillable = [
        'id', 'name', 'weight', 'product', 'price_uah', 'price_usd', 'info', 'photo', 'path300х200', 'path700х400',
    ];
}
