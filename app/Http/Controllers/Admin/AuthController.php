<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('app.admin.login.index');
    }

    public function login(Request $request)
    {
         $inputs = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:8', 'max:32'],
        ]);

        $user = User::where('email', $inputs['email'])->first();
        if($user && $user->role != 'admin'){
            return back()->withErrors('User is not an admin.');
        }

        $loginSucceed = auth()->attempt($inputs);
        if (!$loginSucceed) {
            //toast('Credentials do not match. Please check user name and password again.', 'error');
            return redirect()->back();
        }

        $request->session()->regenerate();

        //toast('User logged in successfully!', 'success');
        return redirect()->route('admin.index');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with([
            'success' => 'You have logged out successfully.',
        ]);
    }

}
