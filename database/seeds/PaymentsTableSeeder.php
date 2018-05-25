<?php

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentsTableSeeder extends Seeder
{
    public function run()
    {
        $payments = factory(Payment::class)->times(50)->make()->each(function ($payment, $index) {
            if ($index == 0) {
                // $payment->field = 'value';
            }
        });

        Payment::insert($payments->toArray());
    }

}

