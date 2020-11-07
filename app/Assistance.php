<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $table = 'assistances';
    //relacion uno a muchos
    public function users(){
        return $this->hasMany('App\User', 'id');
    }
}
