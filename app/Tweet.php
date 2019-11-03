<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tweetlike(){
        return $this->hasMany('App\Tweetlike');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }
}
