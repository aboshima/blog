<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Notifications\CreatePost;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CreatePostNotification;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(3);
        return view('admin.posts.list')->with([
            'all_posts' => $posts,
        ]);
    }
    // :==================== :: ** function ** :: ====================
    public function search(Request $request)
    {
        $request->validate([
            'ser' => 'required'
        ]);
        $ser = $request->ser;
        $filteredposts = Post::where('title', 'like', '%' . $ser . '%')
            ->orWhere('content', 'like', '%' . $ser . '%')->paginate(3);
        if ($filteredposts) {
            return view('admin.posts.list')->with([
                'all_posts' => $filteredposts
            ]);
        } else {
            return view('admin.posts.list')->with([
                'status',
                'للأسف لم نجد نتيجة للبحث'
            ]);
        }
    }

    // :==================== :: ** function ** :: ====================
    public function create()
    {
        $name = "name_ar";
        $categories = Category::select('id', 'name_' . LaravelLocalization::getCurrentLocale() . ' as name')->where('is_active', 1)->get();
        return view('admin.posts.add')->with('categories', $categories);
    }

    // :==================== :: ** function ** :: ====================
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->post_title;
        $post->writer = $request->writer;
        $post->is_active = $request->is_active;
        $post->lang = $request->post_lang;
        $post->category_id = $request->post_category;
        $post->content = $request->post_content;
        $post->user_id = Auth::user()->id;
        $post->image = $request->hasFile('post_img') ? $this->uploadImage_1($request->file('post_img')) : 'default_post.png';
        // ----------------------------------
        $users = User::where('id', '!=', auth()->user()->id)->get();
        $user_create = auth()->user()->name;
        if ($post->save()) {
            Notification::send($users, new CreatePost($post->id, $user_create, $post->title));
            return redirect()->route('list_posts')->with(['success' => 'تمت الإضافة بنجاح']);
        }
        return redirect()->route('dashboard');
    }
    // :==================== :: ** function ** :: ====================
    // ==============  image  ==============
    public function uploadImage_1($image)
    {
        $image_name = time() . '.' . $image->extension();
        $image->move(public_path('/admin/uploads/posts'), $image_name);
        return $image_name;
    }
    // ============== Old image Upload ==============
    public function uploadImage($image, $old_image)
    {
        $image_name = time() . '.' . $image->extension();
        $image->move(public_path('/admin/uploads/posts'), $image_name);
        if ($old_image != null && $old_image != 'default_post.png') {
            unlink(public_path('/admin/uploads/posts') . '/' . $old_image);
        }
        return $image_name;
    }
    // ============== End Old image Upload  ==============

    // :==================== :: ** function ** :: ====================
    public function edit($post_id)
    {
        $name = "name_ar";
        $categories = Category::select('id', 'name_' . LaravelLocalization::getCurrentLocale() . ' as name')->where('is_active', 1)->get();
        $post = Post::find($post_id);
        return view('admin.posts.edit')
            ->with([
                'post' => $post,
                'categories' => $categories,
            ]);
    }

    // :==================== :: ** function ** :: ====================
    public function update(Request $request, $post_id)
    {
        $post = Post::find($post_id);
        $old_image = $post->getRawOriginal('image');
        $post->writer = $request->writer;
        $post->title = $request->post_title;
        $post->is_active = $request->is_active;
        $post->lang = $request->post_lang;
        $post->category_id = $request->post_category;
        $post->content = $request->post_content;
        $post->user_id = Auth::user()->id;
        $post->image = $request->hasFile('post_img') ? $this->uploadImage($request->file('post_img'), $old_image) : $post->getRawOriginal('image');
        if ($post->save()) {
            return redirect()->route('list_posts')->with(['success' => 'تم التعديل بنجاح']);
        }
        return redirect()->back();
    }

    // :==================== :: ** function ** :: ====================
    public function show($id)
    {
        $post = Post::findOrFail($id);
        // توضيح id الذي في المصفوفة داتا أنه نفس الأي دي حق السجل
        $getID = DB::table('notifications')->where('data->post_id', $id)->pluck('id');
        // حدث التأريخ أنه تم قرائته
        DB::table('notifications')->where('id', $getID[0])->update(['read_at' => now()]);
        return view('client.show_post')->with('post', $post);
    }

    // :==================== :: ** function ** :: ====================
    public function markAsRead()
    {
        $user = User::find(auth()->user()->id);
        foreach ($user->unreadNotifications as $notification) {
            $notification->markAsRead();
        }
        return redirect()->back();
    }

    // :==================== :: ** function ** :: ====================
    public function destroy($id)
    {
        // البحث عن العنصر المطلوب
        $data = Post::findOrFail($id);
        $old_image = $data->getRawOriginal('image');
        // حذف الصف من قاعدة البيانات
        $data->delete();
        // حذف الصورة من الخادم
        if (
            $old_image != null && $old_image != 'default_post.png'
        ) {
            unlink(public_path('/admin/uploads/posts') . '/' . $old_image);
        }
        // إعادة توجيه أو إرجاع استجابة
        return redirect()->back()->with(['success' => 'deleted successfully']);
    }
}
