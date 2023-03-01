<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function gotoLogin(){
        return view('components.login');
    }
}
