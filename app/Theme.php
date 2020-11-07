<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $table = 'themes';
    //relacion de uno a muchos
    public function subjects(){
        return $this->hasMany('App\subject', 'id');
    }
    public function teachers(){
        return $this->hasMany('App\User', 'id');
    }
    public function questions(){
        return $this->belongsTo('App\Question', 'id');
    }
    public function details(){
        return $this->belongsTo('App\Detail', 'id');
    }
    //relacion de uno a uno
    public function exams(){
        return $this->belongsTo('App\Exam', 'id');
    }
}
