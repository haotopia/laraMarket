<?php

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddresssTableSeeder extends Seeder {
	public function run() {
		$addresss = factory(Address::class)->times(50)->make()->each(function ($address, $index) {
			if ($index == 0) {
				// $address->field = 'value';
			}
		});

		Address::insert($addresss->toArray());
	}

}
