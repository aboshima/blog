<?php

namespace App\Http\Controllers\client;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function show($id)
    {
        $post = Post::find($id);
        $post->view += 1;
        $post->save();
        return view('client.show_post', compact('post'));
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    public function postsByCategory($id)
    {
        $posts = Post::where('is_active', 1)->where('category_id', $id)->cursorPaginate(4);
        return view('client.posts_by_Category')->with('posts', $posts);
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    // ============== Search ==============
    public function search(Request $request)
    {
        $request->validate([
            'ser' => 'required'
        ]);
        $ser = $request->ser;
        $filteredposts = Post::where('title', 'like', '%' . $ser . '%')
            ->orWhere('content', 'like', '%' . $ser . '%')->paginate(3);
        if ($filteredposts) {
            return view('client.home')->with([
                'posts' => $filteredposts
            ]);
        } else {
            return view('client.home')->with([
                'status',
                'للأسف لم نجد نتيجة للبحث'
            ]);
        }
    }
    // ============== End Search ==============

    // ======================== ** && ---------  Function ---------&& ** ========================

}
