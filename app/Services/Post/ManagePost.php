<?php

namespace App\Services\Post;

use App\Models\Post\Post;

class ManagePost
{
    /**
     * The post model instance.
     */
    protected $post;

    /**
     * Create a new model instance.
     *
     * @param  Post  $post
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function createPost($request)
    {
       return $this->post->create($request);
    }

    public function updatePost($request)
    {
       return $this->post->update($request);
    }
}
