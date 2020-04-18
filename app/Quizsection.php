<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizsection extends Model
{
    //
    protected $fillable = [
        'id',
        'title',
        'start_time',
        'end_time',
        'category',
        'details',
        'user_id',

    ];

    public function user(){
        return $this->belongsTo('app\Models\User');
    }
    public function questions(){
        return $this->hasMany('app\Models\Question');
    }

    public function invitations(){
        return $this->hasMany('app\Models\Invitation');
    }

    public function quizresults(){
        return $this->hasMany('app\Models\Quizresult');
    }
}
