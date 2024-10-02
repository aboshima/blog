<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // ======================== ** && ---------  Function ---------&& ** ========================
    public function getImageAttribute($value)
    {
        return url('/admin/uploads/posts') . '/' . $value;
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    public function getLangAttribute($value)
    {
        if ($value == "ar")
            return "العربية";
        else
            return "english";
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    // ربط العلاقات
    public function user()
    {
        // هذا الموديل مرتبط بعلاقة مع البوست بعمود user_id
        return $this->belongsTo(User::class, 'user_id');
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
