<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Comment;

class CommentPolicy extends Policy
{
    public function update(User $user, Comment $comment)
    {
        // return $comment->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Comment $comment)
    {
        return true;
    }
}
