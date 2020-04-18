<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    protected $fillable = [
        'id',
        'question',
        'points',
        'option1',
        'option2',
        'option3',
        'option4',
        'option5',
        'answer',
        'quizsection_id',

    ];

    public function quizsection(){
        return $this->belongsTo('app\Models\Quizsection');
    }
    public function results(){
        return $this->hasMany('app\Models\Result');
    }
}
