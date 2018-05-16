<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Good;

class GoodPolicy extends Policy
{
    public function update(User $user, Good $good)
    {
        // return $good->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Good $good)
    {
        return true;
    }
}
