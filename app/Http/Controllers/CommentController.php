<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $validated = $request->validate([
            'commenter_name' => 'required|string|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        Comment::create([
            'post_id' => $postId,
            'commenter_name' => $validated['commenter_name'],
            'comment' => $validated['comment'],
        ]);

        return redirect()->route('posts.show', $postId)
                         ->with('success', 'Comment added successfully!');
    }
}
