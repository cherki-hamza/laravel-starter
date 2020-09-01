<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\site;
use App\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        return view('front-end.index');
    }


    public function profile($user)
    {
        $profile = User::find($user)->profile;

        return view('front-end.users.profile',['profile'=>$profile]);
    }


    public function settings(User $user)
    {
        return view('front-end.users.settings');
    }

    public function edit(User $user)
    {
        return view('front-end.users.edit');
    }

}
