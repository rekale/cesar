<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function loginform()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|max:255'
        ]);

        if (Auth::guard('backend')->attempt($request->only('email', 'password'), $request->has('remember'))) {
            flash('Welcome!')->success()->important();
            return redirect()->intended('admin');
        }
        else {
            flash('Your email or password is wrong')->error()->important();
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::guard('backend')->logout();
        flash('You have been logged out.')->success()->important();

        return redirect()->route('front.home');
    }
}
