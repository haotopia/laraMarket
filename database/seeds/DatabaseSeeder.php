<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		$this->call(PaymentsTableSeeder::class);
		$this->call(CommentsTableSeeder::class);
		$this->call(ShopcartsTableSeeder::class);
		$this->call(GoodsTableSeeder::class);
		$this->call(CategorysTableSeeder::class);
		$this->call(AddresssTableSeeder::class);
		$this->call(StoresTableSeeder::class);
    }
}
