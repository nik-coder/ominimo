<?php

public function update(User $user, Post $post)
{
    return $user->id === $post->user_id;
}

public function delete(User $user, Post $post)
{
    return $user->id === $post->user_id;
}

?>