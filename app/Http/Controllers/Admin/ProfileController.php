<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('app.admin.profile.index');
    }

    public function updateInfo(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'name' => ['required', 'max:255'],
        ]);

        auth()->user()->update([
            'email' => $request->email,
            'name' => $request->name,
        ]);

        return back()->with('success', 'Profile information updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        auth()->user()->update([
            'password' => bcrypt($request->password),
        ]);

        return back()->with('success', 'Profile password updated successfully.');
    }
}
