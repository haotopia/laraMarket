<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Address;

class AddressPolicy extends Policy
{
    public function update(User $user, Address $address)
    {
        // return $address->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Address $address)
    {
        return true;
    }
}
