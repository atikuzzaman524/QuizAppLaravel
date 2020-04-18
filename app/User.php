<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'id',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function questions(){
        return $this->hasMany('app\Models\Question');
    }
    public function quizsections(){
        return $this->hasMany('app\Models\Quizsection');
    }

    public function invitations(){
        return $this->hasMany('app\Models\Invitation');
    }
    public function results(){
        return $this->hasMany('app\Models\Result');
    }
    public function quizresults(){
        return $this->hasMany('app\Models\Quizresult');
    }
}
