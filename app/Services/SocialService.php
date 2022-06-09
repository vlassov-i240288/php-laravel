<?php

namespace App\Services;

use App\Models\User;
use App\Services\Contract\Social;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Laravel\Socialite\Contracts\User as SocialUser;

class SocialService implements Social
{
    public function loginOrRegisterViaSocialNetwork(SocialUser $socialUser): string
    {
        $user = User::where('email', $socialUser->getEmail())->first();
        if($user) {
            $user->name = $socialUser->getname();
            $user->avatar = $socialUser->getAvatar();
            if($user->save()) {
                return route('account');
            }
        } else {
            //
            return route('register');
        }
        throw new ModelNotFoundException('Model not found');
    }
}
