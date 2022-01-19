<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use SoftDeletes;
    protected $table = 'tareas';
    protected $fillable = ['id','descripcion','duracionEstimada','duracionReal','prioridad','estado','fecha_tarea','tipo_tarea','id_persona','id_item'];

    public function persona()
    {
        return $this->belongsTo('App\Models\Persona', 'id_persona');
    }
    public function items()
    {
        return $this->hasMany('App\Models\Item','id_item');
    }

}
