<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public function league(){
        return $this->belongsTo('App/League');
    }
}
