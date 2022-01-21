<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\EmpleadoTarea;
use App\Models\Pagina;

class EmpleadoTareaController extends Controller
{
    public function index() {
        Pagina::contarPagina(\request()->path());
        $empleado_tareas = EmpleadoTarea::all();
        return view('empleadoTarea.index', compact('empleado_tareas'));
    }

    public function create(){
        Pagina::contarPagina(\request()->path());
        $tareas = Tarea::where('estado', 'Finalizado')->get();
        // dd($tareas);
        return view('empleadoTarea.create', compact('tareas'));
    }

    public function store(Request $request) {
        Pagina::contarPagina(\request()->path());
        $EmpleadoTarea = new EmpleadoTarea($request->all());
        $EmpleadoTarea->id_empleados = auth()->user()->id_persona;
        $EmpleadoTarea->save();
        return redirect()->route('empleado_tarea.index');
    }

    public function show($id){
        Pagina::contarPagina(\request()->path());
        $EmpleadoTarea = EmpleadoTarea::findOrFail($id);
        $tarea = Tarea::where('id', $EmpleadoTarea->id_tareas)->first();
        return view('empleadoTarea.show', compact('tarea','EmpleadoTarea'));
    }

    public function edit($id){
        Pagina::contarPagina(\request()->path());
        $empleado_tarea = EmpleadoTarea::findOrFail($id);
        $tareas = Tarea::all();
        return view('empleadoTarea.edit', compact('tareas','empleado_tarea'));
    }

    public function update(Request $request, $id){
        $EmpleadoTarea = EmpleadoTarea::findOrFail($id);
        $EmpleadoTarea->nombre = $request->nombre;
        $EmpleadoTarea->descripcion = $request->descripcion;
        $EmpleadoTarea->id_tareas = $request->id_tareas;
        $EmpleadoTarea->id_empleados = auth()->user()->id_persona;
        $EmpleadoTarea->update();
        return redirect()->route('empleado_tarea.index');
    }
    public function destroy($id)
    {
        $EmpleadoTarea = Tarea::findOrFail($id);
        $EmpleadoTarea->delete();
        return redirect()->route('empleado_tarea.index');
    }
}
