<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User2;

class RenterRegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.registerrenter'); // Show the renter registration form
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:user2,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = new User2([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $user->save();

        // Optionally, you can log in the user after registration
        // auth()->login($user);

        return redirect()->route('custom-login2'); // Redirect to the login page after successful registration
    }
}
