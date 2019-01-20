<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    public function team(){
        return $this->hasMany('App/Team','league_id','id');
    }

    public function fixture(){
        return $this->hasMany('App/Fixture','league_id','id');
    }

    public function score(){
        return $this->hasMany('App/Score','league_id','id');
    }

}
