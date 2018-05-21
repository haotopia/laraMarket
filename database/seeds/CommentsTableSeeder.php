<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        $comments = factory(Comment::class)->times(50)->make()->each(function ($comment, $index) {
            if ($index == 0) {
                // $comment->field = 'value';
            }
        });

        Comment::insert($comments->toArray());
    }

}

