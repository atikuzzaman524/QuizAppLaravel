<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    //

    protected $fillable = [
        'id',
        'invited_email',
        'quizsection_id',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('app\Models\User');
    }

    public function quizsection(){
        return $this->belongsTo('app\Models\Quizsection');
    }

}
