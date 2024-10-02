<?php

namespace App\Http\Controllers;


use App\Models\Role;
use Illuminate\Http\Request;

class AppSettings extends Controller
{
    public function generateRoles()
    {
        Role::create([
            'name' => 'admin',
            'display_name' => 'site administration', // optional
        ]);
        Role::create([
            'name' => 'user',
            'display_name' => 'site users', // optional
        ]);
    }
}
