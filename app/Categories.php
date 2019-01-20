<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    public function post(){
        return $this->hasMany('App\Post','categories_id','id');
    }

    public function video(){
        return $this->hasMany('App\Video','categories_id','id');
    }

}
