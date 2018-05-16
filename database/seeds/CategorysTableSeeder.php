<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorysTableSeeder extends Seeder
{
    public function run()
    {
        $categorys = factory(Category::class)->times(50)->make()->each(function ($category, $index) {
            if ($index == 0) {
                // $category->field = 'value';
            }
        });

        Category::insert($categorys->toArray());
    }

}

