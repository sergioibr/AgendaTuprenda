<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Pagina;
use App\Models\Item;
use App\Models\Empleado;
use Carbon\Carbon;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Pagina::contarPagina(\request()->path());
        $tareas = Tarea::all();
   
        return view('tareas.index', ['tareas'=>$tareas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        Pagina::contarPagina(\request()->path());
        $items = Item::all();
        $empleados = Empleado::all();
        return view('tareas.create', compact('items','empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pagina::contarPagina(\request()->path());
        $tarea = new Tarea($request->all());
        $tarea->estado = "En Proceso";
        $tarea->duracionReal = "";
        $tarea->fecha_tarea = Carbon::now()->format('Y-m-d');
        $tarea->save();
        return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Pagina::contarPagina(\request()->path());
        $tarea = Tarea::findOrFail($id);
        // $tarea->load('items','persona');  //No me funca las consultas anidadas :'v
        // dd($tarea);
        $encargado = Empleado::where('id',$tarea->id_persona)->first();
        $item = Item::where('id',$tarea->id_item)->first();
        return view('tareas.show', compact('tarea','encargado','item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Pagina::contarPagina(\request()->path());
        $tarea = Tarea::findOrFail($id);
        $empleados = Empleado::all();
        $items = Item::all();
        return view('tareas.edit', compact('tarea','empleados','items'));
    }


    public function finalizarTarea($id){
        Pagina::contarPagina(\request()->path());
        $tarea = Tarea::findOrFail($id);
        $empleados = Empleado::all();
        $items = Item::all();
        return view('tareas.finalizado', compact('tarea','empleados','items'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->descripcion = $request->descripcion;
        $tarea->duracionEstimada = $request->duracionEstimada;
        $tarea->duracionReal = $request->duracionReal;
        $tarea->prioridad = $request->prioridad;
        $tarea->estado = $request->estado;
        $tarea->tipo_tarea = $request->tipo_tarea;
        $tarea->id_persona = $request->id_persona;
        $tarea->id_item = $request->id_item;
        $tarea->update();
        return redirect()->route('tarea.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
