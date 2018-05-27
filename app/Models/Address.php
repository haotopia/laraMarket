<?php

namespace App\Models;

class Address extends Model {
	protected $fillable = ['openId', 'name', 'phone', 'address', 'province', 'city', 'county', 'status', 'mainaddress'];
}
