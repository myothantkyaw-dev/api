<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    public function post(){
        return $this->belongsTo('App\Post');
    }

    public static function username($user_id){
        $user = User::where('id','=',$user_id)->first();
        return $user->first_name.' '.$user->last_name;
    }
}
