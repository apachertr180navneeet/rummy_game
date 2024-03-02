<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{
    User
};
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Auth,
    Hash,
    Session
};

class AuthController extends Controller
{
    // Login View
    public function login(){
        return view('admin.auth.login');
    }

    // Login POst
    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        $credentials = $request->only('email', 'password');
        $remember_me = $request->get('remember');


        if(Auth::attempt($credentials,$remember_me))
        {
            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            Auth::login($user, $request->get('remember'));
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');


    }
}
