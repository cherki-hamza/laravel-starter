<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Profile;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','mobile','role','status',
        'facebook_id','github_id','google_id','linkden_id','sex',
        'role','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     // get photo from site api by email
     public function getGravatar(){
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return "http://gravatar.com/avatar/$hash";
    }

    // get picture from database ==> from profile model
    public function getPicture(){
        return $this->profile->picture;
    }

    // check if user Profile has a picture in database ==> true : see the user profile has a picture | and false see the user dont have a picture in database
    public function hasPicture(){
        if ($this->profile->picture != null){
            return true;
        }else{
            return false;
        }
    }


    public function profile(){
        return $this->hasOne('App\Profile');
    }

}
