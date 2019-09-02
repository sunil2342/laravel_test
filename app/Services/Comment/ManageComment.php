<?php

namespace App\Services\Comment;
use App\Models\Post\Comment;

class ManageComment
{
    /**
     * The comment model instance.
     */
    protected $comment;

    /**
     * Create a new model instance.
     *
     * @param  Post  $comment
     * @return void
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function createComment($request)
    {
       return $this->comment->create($request);
    }

    public function updateComment($request)
    {
       return $this->comment->update($request);
    }
}
