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

    public function escape()
    {
        $users = User::where('role', 0)->get();
        return view('admin.escape', compact('users'));
    }

    public function answer(User $user)
    {
        return view('admin.escape.answer', compact('user'));
    }

    public function correct(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->update([
            'eternite2' => $user->eternite2 + $request->eternite,
            $request->question => 1,
        ]);
        return redirect()->route('admin.user.answer', $request->id);
    }
}

