<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //

    protected $fillable = [
        'id',
        'user_answer',
        'user_id',
        'question_id',

    ];
    public function user(){
        return $this->belongsTo('app\Models\User');
    }
    public function question(){
        return $this->belongsTo('app\Models\Question');
    }
}
