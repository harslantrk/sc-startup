<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function callback(SocialAccountService $service)
    {
        $providerUser = Socialite::driver('facebook')->stateless()->user();
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($user);

        return redirect()->to('/home');
        /*$user = $providerUser->user;
        echo "<pre>";
        print_r($user['name']);
        die();*/
        // when facebook call us a with token
    }
}
