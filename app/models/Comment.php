<?php
 
public function user()
{
    return $this->belongsTo(User::class);
}

public function post()
{
    return $this->belongsTo(Post::class);
}

?>