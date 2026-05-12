<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
           'username' => 'required|string|min:3|max:255',
           'password' => 'required|string|min:6',
           'remember_token' => 'nullable|boolean',
        ]);

        $login_type = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $login_type => $request->username,
            'password' => $request->password
        ];

        if (auth()->guard('admin')->attempt($credentials, $request->remember_token))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.index'));
        }

        return back()->with('error', 'Invalid credentials.')->onlyInput('username');

    }

}
