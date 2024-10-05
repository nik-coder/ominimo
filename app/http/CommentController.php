<?php 

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'comment' => 'required',
        ]);

        $comment = new Comment($validatedData);
        $comment->user_id = Auth::id();
        $post->comments()->save($comment);

        return back()->with('success', 'Comment added successfully.');
    }

    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);
        $comment->delete();
        return back()->with('success', 'Comment deleted successfully.');
    }
}

?>
