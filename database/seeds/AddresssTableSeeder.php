<?php

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddresssTableSeeder extends Seeder
{
    public function run()
    {
        $addresss = factory(Address::class)->times(50)->make()->each(function ($address, $index) {
            if ($index == 0) {
                // $address->field = 'value';
            }
        });

        Address::insert($addresss->toArray());
    }

}

