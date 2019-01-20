<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $remember_token=false;


    public function post(){
        return $this->hasMany('App\Post','user_id','id');
    }

    public function video(){
        return $this->hasMany('App\Video','user_id','id');
    }

    public function collect(){
        return $this->hasMany('App\Collect','user_id','id');
    }
}
