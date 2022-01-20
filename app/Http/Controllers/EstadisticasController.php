<?php

namespace App\Http\Controllers;
use App\Models\Pagina;
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
 
            $paginas = Pagina::all()->pluck('cant');
            $paginas = json_encode($paginas,JSON_NUMERIC_CHECK);

            return view('estadisticas.index', ['paginas'=>$paginas]);
    }
}
