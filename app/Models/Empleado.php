<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

    protected $table = 'empleados';
    protected $fillable = ['id','cargo','id_persona'];


    public function persona()
    {
        return $this->belongsTo('App\Models\Persona', 'id_persona');
    }
    
   
}
