<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$user = User::find(1);
		$user->assignRole('Founder');
	}
}
