<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TemaController;
use \App\Http\Controllers\PdfController;

use \App\Http\Controllers\AdministradorController;
use \App\Http\Controllers\EmpleadoController;
use \App\Http\Controllers\ClienteController;
use \App\Http\Controllers\EstadisticasController;
use \App\Http\Controllers\HorarioController;
use \App\Http\Controllers\ItemController;
use \App\Http\Controllers\TareaController;
use \App\Http\Controllers\EmpleadoTareaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect()->route('administrador.index');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group(function () {
    Route::get('/home', function () {
        \App\Models\Pagina::contarPagina(request()->path());
        return view('estadisticas.index');
    })->name('home');
    Route::get('/tema', [TemaController::class, 'show'])->name('admin.tema.show');
    Route::put('/tema', [TemaController::class, 'update'])->name('admin.tema.update');

   
    Route::get('/estadisticas', [EstadisticasController::class, 'index'])->name('estadisticas.index');

    Route::get('/administrador', [AdministradorController::class, 'index'])->name('administrador.index');
    Route::get('/administrador/create', [AdministradorController::class, 'create'])->name('administrador.create');
    Route::get('/administrador/{id}', [AdministradorController::class, 'show'])->name('administrador.show');
    Route::post('/administrador', [AdministradorController::class, 'store'])->name('administrador.store');
    Route::get('/administrador/edit/{id}', [AdministradorController::class, 'edit'])->name('administrador.edit');
    Route::put('/administrador/{id}', [AdministradorController::class, 'update'])->name('administrador.update');
    Route::delete('/administrador/{id}', [AdministradorController::class, 'destroy'])->name('administrador.destroy');

    Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
    Route::get('/cliente/{id}', [ClienteController::class, 'show'])->name('cliente.show');
    Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
    Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::put('/cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    Route::delete('/cliente/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');

    Route::get('/empleado', [EmpleadoController::class, 'index'])->name('empleado.index');
    Route::get('/empleado/create', [EmpleadoController::class, 'create'])->name('empleado.create');
    Route::get('/empleado/{id}', [EmpleadoController::class, 'show'])->name('empleado.show');
    Route::post('/empleado', [EmpleadoController::class, 'store'])->name('empleado.store');
    Route::get('/empleado/edit/{id}', [EmpleadoController::class, 'edit'])->name('empleado.edit');
    Route::put('/empleado/{id}', [EmpleadoController::class, 'update'])->name('empleado.update');
    Route::delete('/empleado/{id}', [EmpleadoController::class, 'destroy'])->name('empleado.destroy');

    Route::get('/horario', [HorarioController::class, 'index'])->name('horario.index');
    Route::get('/horario/create', [HorarioController::class, 'create'])->name('horario.create');
    Route::get('/horario/{id}', [HorarioController::class, 'show'])->name('horario.show');
    Route::post('/horario', [HorarioController::class, 'store'])->name('horario.store');
    Route::get('/horario/edit/{id}', [HorarioController::class, 'edit'])->name('horario.edit');
    Route::put('/horario/{id}', [HorarioController::class, 'update'])->name('horario.update');
    Route::delete('/horario/{id}', [HorarioController::class, 'destroy'])->name('horario.destroy');

    Route::get('/item', [ItemController::class, 'index'])->name('item.index');
    Route::get('/item/create', [ItemController::class, 'create'])->name('item.create');
    Route::get('/item/{id}', [ItemController::class, 'show'])->name('item.show');
    Route::post('/item', [ItemController::class, 'store'])->name('item.store');
    Route::get('/item/edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
    Route::put('/item/{id}', [ItemController::class, 'update'])->name('item.update');
    Route::delete('/item/{id}', [ItemController::class, 'destroy'])->name('item.destroy');
    //empleado Tareas
    Route::get('/empleado_tarea', [EmpleadoTareaController::class, 'index'])->name('empleado_tarea.index');
    Route::get('/empleado_tarea/create', [EmpleadoTareaController::class, 'create'])->name('empleado_tarea.create');
    Route::get('/empleado_tarea/{id}', [EmpleadoTareaController::class, 'show'])->name('empleado_tarea.show');
    Route::post('/empleado_tarea', [EmpleadoTareaController::class, 'store'])->name('empleado_tarea.store');
    Route::get('/empleado_tarea/edit/{id}', [EmpleadoTareaController::class, 'edit'])->name('empleado_tarea.edit');
    Route::put('/empleado_tarea/{id}', [EmpleadoTareaController::class, 'update'])->name('empleado_tarea.update');
    Route::delete('/empleado_tarea/{id}', [EmpleadoTareaController::class, 'destroy'])->name('empleado_tarea.destroy');
    
    //Tareas
    Route::resource('tarea', TareaController::class);
    Route::get('/tareaFinalizada/{id}', [TareaController::class, 'finalizarTarea'])->name('finalizarTarea');

});

//Reportes
Route::get('pdf',[PdfController::class,'reporte_usuario'])->name('reporte_usuario');
Route::get('reporte_item',[PdfController::class,'reporte_item'])->name('reporte_item');
Route::get('reporte_tarea',[PdfController::class,'reporte_tarea'])->name('reporte_tarea');


