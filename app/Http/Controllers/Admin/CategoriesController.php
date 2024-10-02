<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
// use Mcamara\LaravelLocalization\LaravelLocalization;

class CategoriesController extends Controller
{
    public function index()
    {
        $all_categories = Category::orderBy('id', 'asc')->paginate(3);
        return view('admin.categories.list')->with('categories', $all_categories);
    }
    // :==================== :: ** function ** :: ====================
    public function create()
    {
        return view('admin.categories.add');
    }
    // :==================== :: ** function ** :: ====================
    public function store(Request $request)
    {
        $new_catrgory = new Category();
        $new_catrgory->name_ar = $request->name_ar;
        $new_catrgory->name_en = $request->name_en;
        $new_catrgory->is_active = $request->status;
        $new_catrgory->image = $request->hasFile('cat_image') ? $this->uploadImage($request->file('cat_image')) : "default_category.png";
        if ($new_catrgory->save())
            return redirect()->route('list_categories')->with(['success' => 'تم إضافة التصنيف بنجاح']);
        return redirect()->back();
    }
    // :==================== :: ** function ** :: ====================
    // ============== image Upload ==============
    public function uploadImage($image)
    {
        $image_name = time() . '.' . $image->extension();
        $image->move(public_path('/admin/uploads/categories/'), $image_name);
        return $image_name;
    }
    // -------------------------------------------------
    // :==================== :: ** function ** :: ====================
    public function show(string $id)
    {
        $show_category = Category::find($id);
        return view('admin.categories.show', compact('show_category'));
    }
    // :==================== :: ** function ** :: ====================
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);
    }
    // :==================== :: ** function ** :: ====================
    public function update(Request $request, string $id)
    {
        $cat = Category::find($id);
        $old_image = $cat->getRawOriginal('image');
        $cat->name_ar = $request->name_ar;
        $cat->name_en = $request->name_en;
        $cat->is_active = $request->status;
        $cat->image = $request->hasFile('cat_image') ? $this->uploadImage_old($request->file('cat_image'), $old_image) : $cat->getRawOriginal('image');
        if ($cat->save())
            return redirect()->route('list_categories')->with(['success' => 'تم تعديل التصنيف بنجاح']);
        return redirect()->back();
    }
    // ============== Old image Upload ==============
    public function uploadImage_old($image, $old_image)
    {
        $image_name = time() . '.' . $image->extension();
        $image->move(public_path('/admin/uploads/categories'), $image_name);
        if ($old_image != null && $old_image != 'default_category.png') {
            unlink(public_path('/admin/uploads/categories') . '/' . $old_image);
        }
        return $image_name;
    }
    // ============== End Old image Upload ==============
    // :==================== :: ** function ** :: ====================
    // ============== Search ==============
    public function search(Request $request)
    {
        $request->validate([
            'ser' => 'required'
        ]);
        $ser = $request->ser;
        $filteredposts = Category::where('name_ar', 'like', '%' . $ser . '%')
            ->orWhere('name_en', 'like', '%' . $ser . '%')->paginate(20);
        if ($filteredposts) {
            return view('admin.categories.list')->with([
                'categories' => $filteredposts
            ]);
        } else {
            return view('admin.categories.list')->with([
                'status',
                'للأسف لم نجد نتيجة للبحث'
            ]);
        }
    }
    // ============== End Search ==============
    // :==================== :: ** function ** :: ====================
    public function destroy($id)
    {
        // البحث عن العنصر المطلوب
        $data = Category::findOrFail($id);
        $old_image = $data->getRawOriginal('image');
        // حذف الصف من قاعدة البيانات
        $data->delete();
        // حذف الصورة من الخادم
        if (
            $old_image != null && $old_image != 'default_category.png'
        ) {
            unlink(public_path('/admin/uploads/categories') . '/' . $old_image);
        }
        // إعادة توجيه أو إرجاع استجابة
        return redirect()->back()->with(['success' => 'deleted successfully']);
    }
}
