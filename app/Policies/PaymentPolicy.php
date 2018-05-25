<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Payment;

class PaymentPolicy extends Policy
{
    public function update(User $user, Payment $payment)
    {
        // return $payment->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Payment $payment)
    {
        return true;
    }
}
