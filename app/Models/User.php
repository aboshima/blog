<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\HasRolesAndPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements LaratrustUser
{
    use HasRolesAndPermissions;

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // ======================== ** && ---------  Function ---------&& ** ========================
    // دالة لإضافة مسار قبل الصورة
    public function getImageAttribute($value)
    {
        return url('/admin/users') . '/' . $value;
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    // ربط العلاقات
    public function user_role()
    {
        return $this->belongsToMany(Role::class, 'role_user_pivot');
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
