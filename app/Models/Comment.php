<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent');
    }
}
