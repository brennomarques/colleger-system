<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        $user = ['id' => rand(4568, 155645), 'name' => 'Battousai'];
        session(['user' => $user]);
        return view("auth.login");
    }

    public function logout(){
        session()->forget('user');
        return view("auth.logout");
    }
}
