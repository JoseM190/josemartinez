<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    //relacion de uno a muchos
    public function themes(){
        return $this->belongsTo('App\Theme', 'id');
    }
}
