<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdPosition extends Model
{
    public function advertisement(){
        return $this->hasMany('App\Advertisement','position','id');
    }
}
