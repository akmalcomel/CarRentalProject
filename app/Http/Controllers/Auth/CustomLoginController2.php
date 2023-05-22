<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User2;

class CustomLoginController2 extends Controller
{
    protected $model = User2::class;
    protected function authenticated(Request $request, $user)
    {
        return redirect('/stdhome');
    }

    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.custom-login2');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('user2')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/stdhome');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

        
    }
   
}
