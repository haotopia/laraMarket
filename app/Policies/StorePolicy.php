<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Store;

class StorePolicy extends Policy
{
    public function update(User $user, Store $store)
    {
        // return $store->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Store $store)
    {
        return true;
    }
}
