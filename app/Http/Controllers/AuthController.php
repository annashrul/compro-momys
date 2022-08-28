<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Page Lock Screen
    public function page_lock_screen()
    {
        $page_title = 'Page Lock Screen';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.page.lock_screen', compact('page_title', 'page_description', 'action'));
    }

    // Page Login
    public function page_login()
    {
        $page_title = 'Page Login';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.page.login', compact('page_title', 'page_description', 'action'));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->with('loginError', 'Login Failed!');
    }

    // Page Register
    public function page_register()
    {
        $page_title = 'Page Register';
        $page_description = 'Some description for the page';
        $action = __FUNCTION__;
        return view('bakery.page.register', compact('page_title', 'page_description', 'action'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'phone_number' => 'required|max:13|unique:users',
            'dob' => 'required|max:10|min:10',
            'birth_place' => 'required|max:255',
            'address' => 'required|max:255',
            'password' => 'required|min:5|max:255|confirmed',
            'password_confirmed' => 'min:5'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role_id'] = 2;
        User::create($validatedData);
        return redirect('/page-login')->with('success', 'Registration successfull, please login!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
