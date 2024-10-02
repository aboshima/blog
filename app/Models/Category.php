<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // دالة لبناء علاقة مع الكاتجوري
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    // دالة لإضافة مسار قبل الصورة
    public function getImageAttribute($value)
    {
        return url('/admin/uploads/categories') . '/' . $value;
    }
}
