<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;
use App\Models\Persona;
use App\Models\Empleado;
use App\Http\Requests\EmpleadoStoreRequest;
use App\Http\Requests\EmpleadoUpdateRequest;
use App\Models\User;


class EmpleadoController extends Controller
{
    public function index(){

        Pagina::contarPagina(\request()->path());
        $empleados = Empleado::all();
        $empleados->load('persona');
        return view('empleado.index', ['empleados'=>$empleados]);
    }

    public function show($id){
        Pagina::contarPagina(\request()->path());
        $empleado = Empleado::findOrFail($id);
        $empleado->load('persona');
        $empleado->persona->load('user');
        return view('empleado.show', ['empleado'=>$empleado]);
    }

    public function create()
    {
        Pagina::contarPagina(\request()->path());
        return view('empleado.create');
    }

    public function store(EmpleadoStoreRequest $request)
    {
        $persona = new Persona($request->all());
        $persona->tipo = 1;
        $persona->save();

        $user = new User();
        $user->email= $request['email'];
        $user->password = bcrypt($request['password']);
        $user->rol='Empleado';
        $user->id_persona = $persona->id;
        $user->save();

        $empleado = new Empleado();
        $empleado->cargo = $request['cargo'];
        $empleado->id_persona = $persona->id;
        $empleado->save();


        return redirect()->route('empleado.index');

    }

    public function edit($id)
    {
        Pagina::contarPagina(\request()->path());
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', ['empleado'=>$empleado]);

    }

    public function update($id,EmpleadoUpdateRequest $request)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->cargo = $request['cargo'];
        $empleado->save();
        $persona = Persona::findOrFail($empleado->id_persona);
        $persona->nombre = $request['nombre'];
        $persona->apellido_paterno = $request['apellido_paterno'];
        $persona->apellido_materno = $request['apellido_materno'];
        $persona->carnet_identidad = $request['carnet_identidad'];
        $persona->direccion = $request['direccion'];
        $persona->fecha_nacimiento = $request['fecha_nacimiento'];
        $persona->telefono = $request['telefono'];
        $persona->save();
        return redirect()->route('empleado.index');
    }

    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $id_persona = $empleado->id_persona;
        $empleado->delete();

        $persona = Persona::findOrFail($id_persona);
        $user = $persona->user;
        $user->delete();
        $persona->delete();

        return redirect()->route('empleado.index');

    }
}
