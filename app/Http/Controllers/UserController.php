<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //formulario de usuario
    public function userform(){
        return view('user.userform');
    }

    //guardar usuarios
    public function save(Request $request){
        
    }
}