<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    //*******************************start github*******************************/
    // function to redirect to github provider
    public function githubRedirect(){
        //return Socialite::driver('github')->redirect();
        // save user in the database for login
        $github_user = Socialite::driver('github')->redirect();


    }
     // function to handle github callback
    public function githubCallback(){
        //$user = Socialite::driver('github')->user();
        //print_r($user);
        $github_user = Socialite::driver('github')->user();
        $user = $this->GithubuserFindOrCreate($github_user);
        //print_r($user);
        Auth::login($user , true);
        return redirect()->route('home')->with('user',$user);

    }

    // function to find github user or create it and store the github_id to the user database
    public function GithubuserFindOrCreate($github_user){
      $user = User::where('github_id',$github_user->id)->first();

      if ($user){
          $user = new User;
          $user->name = $github_user->getName();
          $user->email = $github_user->getEmail();
          $user->github_id = $github_user->getid();
      }
      return $user;
    }
    //*******************************end github*******************************/




//********************************* start google *******************************//

    // function to redirect to google provider
    public function googleRedirect(){
        $github_user = Socialite::driver('google')->redirect();
    }

    // function to handle google callback
    public function googleCallback(){
        $google_user = Socialite::driver('google')->user();
        $user = $this->GoogleuserFindOrCreate($google_user);
        Auth::login($user , true);
        return redirect()->route('home')->with('user',$user);

    }

    // function to find google user or create it and store the google_id to the user database
    public function GoogleuserFindOrCreate($google_user){
      $user = User::where('google_id',$google_user->id)->first();

      if ($user){
          $user = new User;
          $user->name = $google_user->getName();
          $user->email = $google_user->getEmail();
          $user->github_id = $google_user->getid();
      }
      return $user;
    }


//******************************* end google *************************************//

//********************************* start facebook *******************************//

     // function to redirect to facebook provider
     public function facebookRedirect(){
        $github_user = Socialite::driver('facebook')->redirect();
    }

    // function to handle facebook callback
    public function facebookCallback(){
        $facebook_user = Socialite::driver('facebook')->user();
        $user = $this->FacebookuserFindOrCreate($facebook_user);
        Auth::login($user , true);
        return redirect()->route('home')->with('user',$user);

    }

    // function to find facebook user or create it and store the facebook_id to the user database
    public function FacebookserFindOrCreate($facebook_user){
      $user = User::where('facebook_id',$facebook_user->id)->first();

      if ($user){
          $user = new User;
          $user->name = $facebook_user->getName();
          $user->email = $facebook_user->getEmail();
          $user->github_id = $facebook_user->getid();
      }
      return $user;
    }


//****************************************************************************//
}
