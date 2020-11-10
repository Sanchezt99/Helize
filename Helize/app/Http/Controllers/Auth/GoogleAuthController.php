<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController 
{
    use RegistersUsers;

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        if($user = User::where('email', $googleUser->email)->first()) {
            $this->guard()->login($user);
        }else {
            $userData = [
                'name' => $googleUser->name,
                'username' => $googleUser->email,
                'email' => $googleUser->email,
                'password' => md5(rand(1,10000))
            ];
            $this->register($userData);
        }
        return redirect($this->redirectPath());
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    private function register(array $data)
    {
        event(new Registered($user = $this->create($data)));

        $this->guard()->login($user);
    }
}
