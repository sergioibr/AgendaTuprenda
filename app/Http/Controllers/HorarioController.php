<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;
use App\Models\Horario;
use App\Models\Empleado;
use App\Http\Requests\HorarioStoreRequest;
use App\Http\Requests\HorarioUpdateRequest;
use App\Models\User;


class HorarioController extends Controller
{
    public function index()
    {
        Pagina::contarPagina(\request()->path());
        $horarios = Horario::all();
   
        return view('horario.index', ['horarios'=>$horarios]);
    }

    public function show($id)
    {
        Pagina::contarPagina(\request()->path());
        $horario = Horario::findOrFail($id);
        $empleado = Empleado::all();
        return view('horario.show', ['horario'=>$horario]);
    }
    public function create()
    {
        Pagina::contarPagina(\request()->path());
        $horarios = Horario::all();
        $empleados = Empleado::all();
        return view('horario.create', ['horarios'=>$horarios, 'empleados'=>$empleados]);
    }

    public function store(HorarioStoreRequest $request)
    {
        $horario = new Horario($request->all());
        $horario->id_persona = auth()->user()->id_persona;
        $horario->save();
        return redirect()->route('horario.index');
    }

    public function edit($id)
    {
        Pagina::contarPagina(\request()->path());
        $horario = Horario::findOrFail($id);
        $empleados = Empleado::all();
        return view('horario.edit', ['horario'=>$horario, 'empleados'=>$empleados]);
     
    }

    public function update($id, HorarioUpdateRequest $request)
    {
        $horario = Horario::findOrFail($id);
        $horario->turno = $request->input('turno');
        $horario->duracion = $request->input('duracion');
        $horario->cantidad_extra = $request->input('cantidad_extra');
        $horario->id_persona = auth()->user()->id_persona;
        $horario->save();
        return redirect()->route('horario.index');
    }

    public function destroy($id)
    {
        $horario = Horario::findOrFail($id);
        $horario->delete();
        return redirect()->route('horario.index');
    }
}
