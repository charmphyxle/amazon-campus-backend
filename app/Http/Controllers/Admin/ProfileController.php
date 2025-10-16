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

        return back()->with('success', 'Profile information updated successfully.');
    }

    public function updatePassword()
    {
        return back()->with('success', 'Profile password updated successfully.');
    }
}
