<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Responce;
use App\User;

class UserController extends Controller
{
    //lista de estudiante
    public function index(){
        $data['users'] = User::paginate(2);
        return view('user.index', $data);
    }

    //crear
    public function create(){
        return view('user.create');
    }

    //editar estudiante
    public function edit($id){
        $usuario = User::findOrFail($id);
        return view('user.edit', compact('usuario'));
    }

    //modificar los datos del estudiante
    public function update(Request $request, $id){
        $datosEstudiante = request()->except((['_token', '_method']));
        User::where('id', '=', $id)->update($datosEstudiante);

        //$usuario = User::findOrFail($id);
        return back()->with('estudianteModificado', 'Successfully Modified Student');
    }

    //insertar datos del estudiante
    public function store(Request $request){
        $datosEstudiante = request()->all();

        $datosEstudiante = request()->except('_token');
        User::insert($datosEstudiante);
        return back()->with('estudianteGuardado','Registered Student');
    }

    //
    public function show(){

    }

    //eliminar datos del estudiante
    public function destroy($id){
        User::destroy($id);
        return back()->with('estudianteEliminado', 'Eliminated Student');
    }
}
