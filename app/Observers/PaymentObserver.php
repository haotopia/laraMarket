<?php

namespace App\Observers;

use App\Models\Payment;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class PaymentObserver
{
    public function creating(Payment $payment)
    {
        //
    }

    public function updating(Payment $payment)
    {
        //
    }
}