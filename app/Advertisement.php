<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public function adPosition(){
        return $this->belongsTo('App\Advertisement');
    }
}
