<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\SocialIdentity;
//use Illuminate\Foundation\Auth;
use App\User;
use Auth;
use Redirect;

class SocialAuthController extends Controller
{
    //90
    public function redirectToProvider()
    {
    	return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback ()
   {
       try {
           $user = Socialite::driver('github')->user();
       } 
       catch (Exception $e) 
       {
           return redirect('/login');
       }

       $authUser = $this->findOrCreateUser($user);
       Auth::login($authUser, true);
       return Redirect::to($this->redirectTo);
   }


   public function findOrCreateUser($providerUser)
   {
       $account = SocialIdentity::whereProviderName('github')
                  ->whereProviderId($providerUser->getId())
                  ->first();

       if ($account) {
           return $account->user;
       } 
       else {
           $user = User::whereEmail($providerUser->getEmail())->first();

           if (! $user)
            {
               $user = User::create([
                   'email' => $providerUser->getEmail(),
                   'name'  => $providerUser->getName(),
               ]);
           }

           $user->identities()->create([
               'provider_id'   => $providerUser->getId(),
               'provider_name' => 'github',
           ]);

           return $user;
           Redirect::to('home');
       }
   }

}
   


    // public function handleProviderCallback()
    // {
    // 	try {
    //         $user = Socialite::driver('github')->user();

    //     } catch (\Exception $e) {
    //         return redirect('/login');
    //     }
    //     $existingUser = User::where('email', $user->email)->first();
    //     if($existingUser){
    //         // log them in
    //         auth()->login($existingUser, true);

    //     } else {
    //         // create a new user
    //         $newUser                  = new User;
    //         $newUser->name            = $user->name;
    //         $newUser->email           = $user->email;
    //         $newUser->google_id       = $user->id;
    //         $newUser->avatar          = $user->avatar;
    //         $newUser->avatar_original = $user->avatar_original;
    //         $newUser->save();
    //         auth()->login($newUser, true);
    //     }
    //     return redirect('/home');
    // }

    	
    

