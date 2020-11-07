<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'identify_card', 'email', 'password', 'birthdate', 'gender', 'cellular',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'users';
    //relacion de uno a muchos
    public function assistances(){
        return $this->belongsTo('App\Assistance', 'id');
    }
    public function themes(){
        return $this->belongsTo('App\Theme', 'id');
    }
    public function details(){
        return $this->belongsTo('App\Detail', 'id');
    }
    public function exams(){
        return $this->belongsTo('App\Exam', 'id');
    }
}
