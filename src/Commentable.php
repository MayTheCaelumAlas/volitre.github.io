<?php

namespace Laravelista\Comments;

/**
 * Add this trait to any model that you want to be able to
 * comment upon or get comments for.
 */
trait Commentable
{
    /**
     * Returns all comments for this model.
     */
    public function comments()
    {
        return $this->morphMany(config('comments.comment_class'), 'commentable');
    }
}
