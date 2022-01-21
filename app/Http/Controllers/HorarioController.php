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
        return view('horario.create', compact('horarios','empleados'));
    }

    public function store(HorarioStoreRequest $request)
    {
        $horario = new Horario($request->all());

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
    {$horario = new Horario($request->all());
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

