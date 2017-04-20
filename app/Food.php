<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
<<<<<<< HEAD
        'product',  'photo',
=======
        'product', 'weight', 'price_uah', 'price_usd', 'photo',
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
    ];
}
