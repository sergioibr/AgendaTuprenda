@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="card card_color">
                <form action="{{route('empleado_tarea.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-content">
                        <span class="card-title titulo text_color">Registrar una Plantilla</span>
                        <div class="row">
                            <div class="input-field col s6">
                                <input  id="nombre" name="nombre" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un nombre valido')" oninput="setCustomValidity('')" required>
                                <label for="nombre">Nombre :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="descripcion" name="descripcion" type="text" class="validate" oninvalid="setCustomValidity('Ingresa una descripcion valida')" oninput="setCustomValidity('')" required>
                                <label for="direccion">descripcion :</label>
                            </div>

                            
                         
                            <div class="input-field col s12 m6">
                                <select name="id_tareas" oninvalid="setCustomValidity('Seleccione un tarea')" oninput="setCustomValidity('')" required>
                                    <option value="" disabled selected>Escoja uno</option>
                                    @foreach($tareas as $tarea)
                                        <option value="{{$tarea->id}}">{{$tarea->descripcion}}</option>
                                    @endforeach
                                </select>
                                <label>Seleccione una tarea</label>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col s12 right-align">
                                <a href="{{route('empleado_tarea.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>
                            <button class="btn deep-purple darken-3 waves-effect waves-light" type="submit">Guardar
                            </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
