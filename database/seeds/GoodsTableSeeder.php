<?php

use Illuminate\Database\Seeder;
use App\Models\Good;

class GoodsTableSeeder extends Seeder
{
    public function run()
    {
        $goods = factory(Good::class)->times(50)->make()->each(function ($good, $index) {
            if ($index == 0) {
                // $good->field = 'value';
            }
        });

        Good::insert($goods->toArray());
    }

}

