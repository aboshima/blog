<?php

namespace App\Http\Controllers;


use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LikeController extends Controller
{
    public function like(Post $post)
    {
        $user = Auth::user();
        // Check if the user has already liked the post
        if (!$user->likes()->where('post_id', $post->id)->exists()) {
            // Create a new like
            $like = new Like();
            $like->user_id = $user->id;
            $like->post_id = $post->id;
            $like->save();
        }
        return redirect()->back();
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    public function unlike(Post $post)
    {
        $user = Auth::user();
        // Check if the user has liked the post
        $like = $user->likes()->where('post_id', $post->id)->first();
        if ($like) {
            // Delete the like
            $like->delete();
        }
        return redirect()->back();
    }
}
