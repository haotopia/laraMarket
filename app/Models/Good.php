<?php

namespace App\Models;

class Good extends Model
{
    protected $fillable = ['market_id', 'name', 'price', 'quntity', 'abstract', 'img', 'address'];
}
