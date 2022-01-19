<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmpleadoTarea extends Model
{
    use SoftDeletes;
    protected $table = 'empleados_tareas';
    protected $fillable = ['id','id_empleados','id_tareas'];

    public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado', 'id_empleados');
    }
    public function tarea()
    {
        return $this->belongsTo('App\Models\Tarea', 'id_tareas');
    }
}
