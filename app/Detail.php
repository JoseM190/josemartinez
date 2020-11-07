<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';
    //relacion de uno a muchos
    public function students(){
        return $this->hasMany('App\User', 'id');
    }
    public function themes(){
        return $this->hasMany('App\Theme', 'id');
    }
    public function questions(){
        return $this->hasMany('App\Question', 'id');
    }
    //relacion de uno a uno
    public function exams(){
        return $this->belongsTo('App\Exam', 'id');
    }
}
