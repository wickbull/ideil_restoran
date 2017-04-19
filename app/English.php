<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class English extends Model
{
    protected $fillable = [
        'blade', 'element', 'word_en', 'word_ua',
    ];
}
