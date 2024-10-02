<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PDO;

class HomePageController extends Controller
{
    public function index()
    {
        $posts = Post::with([
            'user',
            'comments' => function ($comment) {
                return $comment->where('parent', 0);
            },
            'category'
        ])->orderBy('id', 'desc')->where('is_active', 1)->paginate(6);
        return view('client.home')
            ->with([
                'posts' => $posts
            ]);
    }
    // ======================== ** && ---------  Function ---------&& ** ========================
    public function about()
    {
        return view('client.about');
    }
    // ======================== ** && ---------  Function ---------&& ** ========================

}
