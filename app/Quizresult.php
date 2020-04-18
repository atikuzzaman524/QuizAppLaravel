<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizresult extends Model
{
    //
    protected $fillable = [
        'id',
        'total_result',
        'user_id',
        'quizsection_id',

    ];

    public function quizsection(){
        return $this->belongsTo('app\Models\Quizsection');
    }
    public function user(){
        return $this->belongsTo('app\Models\User');
    }
    public function invitations(){
        return $this->hasMany('app\Models\Invitation');
    }
}
