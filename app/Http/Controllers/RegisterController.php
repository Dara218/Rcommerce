<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function gotoRegister(){
        return view('components.register');
    }

    public function create(){

        $userCredentials = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'username' => 'required|min:3|max:20',
            'password' => [
                'required',
                'confirmed',
                'min:8',              // minimum length of 8 characters
                'max:255',            // maximum length of 255 characters
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain at least one special character
            ],
        ]);

        $userCredentials['password'] = bcrypt($userCredentials['password']);

        $user = User::create($userCredentials);

        auth()->login($user);

        return redirect('/login')->with('success', 'Registration successful.');


    }
}
