<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    //
    public function login_facebook()
    {
        $user = Socialite::driver('facebook')->user();
    dd($user->getEmail() . ' - ' . $user->getName());
//        dd($user);
    }

    public function login_google()
    {
        $user = Socialite::driver('google')->user();
        dd($user->getEmail() . ' - ' . $user->getName());
//        dd($user);
    }
}
