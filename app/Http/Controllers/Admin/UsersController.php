<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;



class UsersController extends Controller
{
    // public function store(Request $request)
    // {
    // -------------------------------------------
    // يستخدم لإدخال إسم المستخدم لمرة واحدة في بداية المشروع
    // $user = new User();
    // $user->name = 'aboaiman';
    // $user->email = 'yamall13promax@gmail.com';
    // $user->password = Hash::make('admin123');
    // $user->save();
    // -------------------------------------------
    // }

    // :==================== :: ** function ** :: ====================
    // ================== Log In ==================
    public function login()
    {
        return view('admin.users.login');
    }

    // :==================== :: ** function ** :: ====================
    public function checkUser(Request $request)
    {
        $islogged = Auth::attempt(['email' => $request->user_email, 'password' => $request->user_password]);
        if ($islogged) {
            $user = User::where('email', $request->user_email)->first();
            Auth::login($user);
            return redirect()->route('dashboard');
        }
        return view('admin.users.login')->with(
            'status',
            'للأسف لست من الأشخاص المسموح لهم بالدخول'
        );
    }

    // :==================== :: ** function ** :: ====================
    // ================== Log out ==================
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function index()
    {
        $roles = Role::get();
        $all_users = User::orderBy('id', 'desc')->paginate(3);
        return view('admin.users.list')->with([
            'all_users' => $all_users,
            'roles' => $roles,
        ]);
    }

    // :==================== :: ** function ** :: ====================
    // ============== Search ==============
    public function search(Request $request)
    {
        $request->validate([
            'ser' => 'required'
        ]);
        $ser = $request->ser;
        $filteredposts = User::where('name', 'like', '%' . $ser . '%')
            ->orWhere('email', 'like', '%' . $ser . '%')->paginate(10);
        if ($filteredposts) {
            return view('admin.users.list')->with([
                'all_users' => $filteredposts
            ]);
        } else {
            return view('admin.users.list')->with([
                'status', 'للأسف لم نجد نتيجة للبحث'
            ]);
        }
    }
    // ============== End Search ==============

    // :==================== :: ** function ** :: ====================
    public function create()
    {
        $roles = Role::get();
        return view('admin.users.add')->with('roles', $roles);
    }

    // :==================== :: ** function ** :: ====================
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->user_name;
        $user->email = $request->user_email;
        $user->image = $request->hasFile('user_image') ? $this->uploadImage($request->file('user_image')) : "default_user.png";
        $pass = $this->randomPassword();
        $user->password = Hash::make($pass);
        if ($user->save()) {
            $user_data = array('name' => $request->user_name, 'password' => $pass);
            $user->addRole($request->user_role);
            Mail::to($request->user_email)->send(new WelcomeEmail($user_data));
            return redirect()->route('list_users')->with(['success' => 'تم إضافة المستخدم بنجاح']);
        };
    }
    // ============== image Upload ==============
    public function uploadImage($image)
    {
        $image_name = time() . '.' . $image->extension();
        $image->move(public_path('/admin/users/'), $image_name);
        return $image_name;
    }
    // ============== randomPassword ==============

    // :==================== :: ** function ** :: ====================
    function randomPassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    // :==================== :: ** function ** :: ====================
    public function show($id)
    {
        $show_user = User::find($id);
        return view('admin.users.show')->with('show_user', $show_user);
    }

    // :==================== :: ** function ** :: ====================
    public function edit($id)
    {
        $roles = Role::get();
        $edit_user = User::find($id);
        return view('admin.users.edit')
            ->with('edit_user', $edit_user)
            ->with('roles', $roles);
    }

    // :==================== :: ** function ** :: ====================
    public function update(Request $request, string $id)
    {
        $up_user = User::find($id);
        $old_image = $up_user->getRawOriginal('image');
        $up_user->name = $request->user_name;
        $up_user->email = $request->user_email;
        $up_user->is_active = $request->status;
        $up_user->image = $request->hasFile('user_image') ? $this->uploadImage_old($request->file('user_image'), $old_image) : $up_user->getRawOriginal('image');
        if ($up_user->save())
            return redirect()->route('list_users')->with(['success' => 'تم تعديل المستخدم بنجاح']);
        return redirect()->back();
    }
    // ============== Old image Upload ==============
    public function uploadImage_old($image, $old_image)
    {
        $image_name = time() . '.' . $image->extension();
        $image->move(public_path('/admin/users'), $image_name);
        if ($old_image != null && $old_image != 'default_user.png') {
            unlink(public_path('/admin/users') . '/' . $old_image);
        }
        return $image_name;
    }
    // ============== End Old image Upload ==============


    // :==================== :: ** function ** :: ====================
    public function documentation()
    {
        return view('admin.doc');
    }

    // :==================== :: ** function ** :: ====================
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with(['success' => 'تم حذف التصنيف بنجاح']);
    }
}
