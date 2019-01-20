<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collects extends Model
{
    public function collector(){
        return $this->belongsTo('App\Collector');
    }
}
