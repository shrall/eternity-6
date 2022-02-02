<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        $users = User::where('role', 0)->get();
        return view('admin.dashboard', compact('users'));
    }
}
