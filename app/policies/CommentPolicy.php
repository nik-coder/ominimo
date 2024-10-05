<?php

public function delete(User $user, Comment $comment)
{
    return $user->id === $comment->user_id || $user->id === $comment->post->user_id;
}

?>