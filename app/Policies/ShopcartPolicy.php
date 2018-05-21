<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Shopcart;

class ShopcartPolicy extends Policy
{
    public function update(User $user, Shopcart $shopcart)
    {
        // return $shopcart->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Shopcart $shopcart)
    {
        return true;
    }
}
