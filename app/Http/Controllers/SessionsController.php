<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function gotoLogin(){
        return view('components.login');
    }

    public function login(LoginRequest $request){

        if(auth()->attempt($request->validated())){
            session()->regenerate();
            return redirect('menu')->with('success', 'Login Success');
        }

        return back()->withInput()->with('error', 'Invalid username or password.');
    }
}
