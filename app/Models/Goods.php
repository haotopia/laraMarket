<?php

namespace App\Models;

class Goods extends Model {
	protected $fillable = ['market_id', 'name', 'price', 'quntity', 'abstract', 'img', 'address'];
}
