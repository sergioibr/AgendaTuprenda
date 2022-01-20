<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\User;
use App\Models\Item;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function reporte_usuario(){

        $usuarios = User::all();
        $view=view('vista-pdf', compact('usuarios'))->render();
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('archivo'.'.pdf');

    }
 
    public function reporte_tarea(){

        $tareas= Tarea::all();
        $view=view('tarea-pdf', compact('tareas'))->render();
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('archivo'.'.pdf');

    }
    public function reporte_item(){

        $items= Item::all();
        $view=view('item-pdf', compact('items'))->render();
        $pdf= App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('archivo'.'.pdf');

    }
}
