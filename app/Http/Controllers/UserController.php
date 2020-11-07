<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function config()
    {
        return view('user.config');
    }

    public function update(Request $request)
    {
        //get variable
        $user= \Auth::user(); 
        $id= \Auth::user()->id;
        //validations rules
        $validate = $this->validate ($request, [
            'name' => 'required', 'string', 'max:255',
            'surname' => ['required', 'string', 'max:255'],
            'identify_card' => ['required', 'string', 'max:15'],
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users,email,'.$id,
            'birthdate' => ['required', 'string', 'max:12'],
            'gender' => ['required', 'string', 'max:2'],
            'cellular' => ['required', 'string', 'max:10'],
            ]);
        //getting values
        $name=$request->input('name');
        $surname=$request->input('surname');
        $identify_card=$request->input('identify_card');
        $email=$request->input('email');
        $birthdate=$request->input('birthdate');
        $gender=$request->input('gender');
        $cellular=$request->input('cellular');

        //news values in the object user
        $user->name = $name;
        $user->surname = $surname;
        $user->identify_card = $identify_card;
        $user->email = $email;
        $user->birthdate = $birthdate;
        $user->gender = $gender;
        $user->cellular = $cellular;

        //run query in the data base

        $user->update();

        return redirect()->route('config');
                        // ->with(['message'=>'Usuario Actualizado correctamente']);


    }
}

