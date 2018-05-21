<?php

use Illuminate\Database\Seeder;
use App\Models\Shopcart;

class ShopcartsTableSeeder extends Seeder
{
    public function run()
    {
        $shopcarts = factory(Shopcart::class)->times(50)->make()->each(function ($shopcart, $index) {
            if ($index == 0) {
                // $shopcart->field = 'value';
            }
        });

        Shopcart::insert($shopcarts->toArray());
    }

}

