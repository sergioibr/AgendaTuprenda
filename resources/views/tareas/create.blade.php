@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="card card_color">
                <form action="{{route('tarea.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-content">
                        <span class="card-title titulo text_color">Registrar en Tarea</span>
                        <div class="row">

                            <div class="input-field col s6">
                                <input  id="descripcion" name="descripcion" type="text" class="validate" oninvalid="setCustomValidity('Ingresa la Descripcion')" oninput="setCustomValidity('')" required>
                                <label for="descripcion">Descripcion :</label>
                            </div>

                            <div class="input-field col s6">
                                <input  id="tipo_tarea" name="tipo_tarea" type="text" class="validate" oninvalid="setCustomValidity('Ingresa el tipo de tarea')" oninput="setCustomValidity('')" required>
                                <label for="tipo_tarea">Tipo de Tarea :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="duracionEstimada" name="duracionEstimada" type="text" class="validate" oninvalid="setCustomValidity('Ingresa la duracion')" oninput="setCustomValidity('')" required>
                                <label for="duracionEstimada">Duracion Estimada :</label>
                            </div>

                            {{-- <div class="input-field col s6">
                                <input id="duracionReal" name="duracionReal" type="text" class="validate" oninvalid="setCustomValidity('Ingresa la duracion')" oninput="setCustomValidity('')" required>
                                <label for="duracionReal">Duracion Real :</label>
                            </div> --}}

                            <div class="input-field col s6">
                                <select name="prioridad" oninvalid="setCustomValidity('Seleccione una prioridad')" oninput="setCustomValidity('')" required>
                                    <option value="" disabled selected>Escoja uno</option>
                                    <option value="Baja">Baja</option>
                                    <option value="Media">Media</option>
                                    <option value="Alta">Alta</option>
                                </select>
                                <label for="prioridad">Prioridad :</label>
                            </div>

                            <div class="input-field col s6">
                                <select name="id_persona" oninvalid="setCustomValidity('Seleccione un persona')" oninput="setCustomValidity('')" required>
                                    <option value="1" disabled selected>Escoja uno</option>
                                    @foreach($empleados as $empleado)
                                        <option value="{{$empleado->id}}">{{$empleado->cargo}}</option>
                                    @endforeach
                                </select>
                                <label>Seleccione una persona</label>
                            </div>
                            
                            <div class="input-field col s12 m6">
                                <select name="id_item" oninvalid="setCustomValidity('Seleccione un persona')" oninput="setCustomValidity('')" required>
                                    <option value="" disabled selected>Escoja uno</option>
                                    @foreach($items as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                                    @endforeach
                                </select>
                                <label>Seleccione un item</label>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col s12 right-align">
                                <a href="{{route('tarea.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>
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
