<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweetlike extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tweetlike(){
        return $this->belongsTo('App\Tweetlike');
    }
}
