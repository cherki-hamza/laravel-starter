<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'about' , 'info' , 'picture','facebbok',
        'github','google','linkden','twitter','website','instagram',
        'email','tel','field_1','field_2','field_3','field_4','field_5'
        ];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
