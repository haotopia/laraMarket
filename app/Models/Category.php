<?php

namespace App\Models;
use Carbon\Carbon;

class Category extends Model {
	protected $fillable = ['openId', 'name', 'updated_at'];
	public function getUpdatedAtAttribute($date) {
		// 默认100天前输出完整时间，否则输出人性化的时间
		if (Carbon::now() > Carbon::parse($date)->addDays(100)) {
			return Carbon::parse($date);
		}

		return Carbon::parse($date)->diffForHumans();
	}
	public function getCreatedAtAttribute($date) {
		// 默认100天前输出完整时间，否则输出人性化的时间
		if (Carbon::now() > Carbon::parse($date)->addDays(100)) {
			return Carbon::parse($date);
		}

		return Carbon::parse($date)->diffForHumans();
	}
}
