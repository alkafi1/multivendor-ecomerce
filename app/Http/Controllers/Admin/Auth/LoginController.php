<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class LoginController extends Controller
{
    public function login_index()
    {
        return view('Admin.Auth.login');
    }
    public function admin_login_post(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        // $user = Admin::create([
        //     'name' => 'Super Admin',
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        $user = ([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);

        // return redirect(RouteServiceProvider::HOME);
        return redirect()->route('admin.dashboard');
    }
    public function admin_logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
