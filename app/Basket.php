<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Basket extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 'id_user', 'count', 'name_product', 'name_addit', 'street', 'name_user', 'phone', 'photo', 'price_uah', 'price_usd',
    ];


}
