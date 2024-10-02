<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;

class DashboardController extends Controller
{
    public function index()
    {
        $rowCount = Category::count();
        $rowCount_post = Post::count();
        $rowCount_message = ContactUs::count();

        return view('admin.dashboard.home', compact(['rowCount', 'rowCount_post', 'rowCount_message']));
    }
}
