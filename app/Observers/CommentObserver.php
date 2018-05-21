<?php

namespace App\Observers;

use App\Models\Comment;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class CommentObserver
{
    public function creating(Comment $comment)
    {
        //
    }

    public function updating(Comment $comment)
    {
        //
    }
}