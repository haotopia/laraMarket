<?php

namespace App\Policies;

use App\Models\Goods;
use App\Models\User;

class GoodsPolicy extends Policy {
	public function update(User $user, Goods $goods) {
		// return $goods->user_id == $user->id;
		return true;
	}

	public function destroy(User $user, Goods $goods) {
		return true;
	}
}
