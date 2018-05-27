<?php

use App\Models\Goods;
use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder {
	public function run() {
		$goods = factory(Goods::class)->times(50)->make()->each(function ($goods, $index) {
			if ($index == 0) {
				// $good->field = 'value';
			}
		});

		Goods::insert($goods->toArray());
	}

}
