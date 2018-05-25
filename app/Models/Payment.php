<?php

namespace App\Models;

class Payment extends Model
{
    protected $fillable = ['openId', 'ads_id', 'list_id', 'status'];
}
