<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    public function team(){
        return $this->belongsTo('App/League');
    }
}
