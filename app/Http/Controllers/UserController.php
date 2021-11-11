<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewLogin()
    {
        $title = "Booking Lapangan - Login Page";
        
        return view('auth.login', compact('title'));
    }

    public function viewRegister()
    {
        $title = "Booking Lapangan - Register Page";

        return view('auth.register', compact('title'));
    }
}
