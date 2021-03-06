<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function categories(){
        return $this->belongsTo('App\Categories');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
