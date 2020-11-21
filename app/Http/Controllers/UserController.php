<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $data['users'] = User::paginate(5);
        return view('user.index', $data);
    }

    //formulario de usuario
    public function userform(){
        return view('user.userform');
    }

    //guardar usuarios
    public function save(Request $request){
        $validator = $this->validate($request, [
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'identify_card' => 'required|integer',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'birthdate' => 'required|date',
            'gender' => 'required|string|max:2',
            'cellular' => 'required|integer'
        ]);
        $userdata = request()->except('_token');
        User::insert($userdata);

        return back()->with('estudianteGuardado','Registered Student');
    }
}
