<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //listar estudiantes
    public function index(){
        $data['users'] = User::paginate(2);
        return view('user.index', $data);
    }

    //formulario de crear estudiante
    public function createU(){
        return view('user.create');
    }

    //guardar estudiantes
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

    //eliminar estudiante
    public function delete($id){
        User::destroy($id);
        return back()->with('estudianteEliminado', 'Eliminated Student');
    }

    //editar estudiante
    public function edit($id){
        $usuario = User::findOrFail($id);
        return view('user.edit', compact('usuario'));
    }

    //edicion de estudiante
    public function edition(Request $request, $id){
        $datosUsuario = request()->except((['_token', '_method']));
        User::where('id', '=', $id)->update($datosUsuario);

        return back()->with('estudianteModificado', 'Successfully Modified Student');
    }
}
