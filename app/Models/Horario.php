<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Horario extends Model
{
    use SoftDeletes;
    protected $table = 'horarios';
    protected $fillable = ['id','turno','duracion','cantidad_extra','id_persona'];

    public function persona()
    {
        return $this->belongsTo('App\Models\Persona', 'id_persona');
    }
    
}
