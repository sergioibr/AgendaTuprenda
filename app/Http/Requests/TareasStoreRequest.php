<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TareasStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "descripcion"=> "required",
            "duracionEstimada"=>"required",
            "duracionReal"=>"required",
            "prioridad"=>"required",
            "estado"=>"required",
            "fecha_tarea"=>"required",
            "tipo_tarea"=>"required",
            "id_persona"=>"required",
            "id_item"=>"required"

        ];
    }
}
