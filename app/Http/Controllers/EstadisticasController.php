<?php

namespace App\Http\Controllers;
use App\Models\Pagina;
use App\Models\Administrador;
use App\Models\Empleado;
use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Tarea;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        Pagina::contarPagina(\request()->path());
            $administrador = Administrador::all()->count();
            $empleado = Empleado::all()->count();
            $cliente = Cliente::all()->count();
            $tareafinalizada = Tarea::where('estado','Finalizado')->count();
            $persona = [$administrador,$empleado,$cliente];
            $persona_lista = json_encode($persona,JSON_NUMERIC_CHECK);
            // dd($persona_lista);


            return view('estadisticas.index', compact('persona_lista'));
    }
}
