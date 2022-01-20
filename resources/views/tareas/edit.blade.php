@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="card card_color">
                <form action="{{route('tarea.update',[$tarea->id])}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-content">
                        <span class="card-title titulo text_color">Actualizar en Tarea</span>
                        <div class="row">

                            <div class="input-field col s6">
                                <input  id="descripcion" name="descripcion" value="{{$tarea->descripcion}}" type="text" class="validate" oninvalid="setCustomValidity('Ingresa la Descripcion')" oninput="setCustomValidity('')" required>
                                <label for="descripcion">Descripcion :</label>
                            </div>

                            <div class="input-field col s6">
                                <input  id="tipo_tarea" name="tipo_tarea" value="{{$tarea->tipo_tarea}}" type="text" class="validate" oninvalid="setCustomValidity('Ingresa el tipo de tarea')" oninput="setCustomValidity('')" required>
                                <label for="tipo_tarea">Tipo de Tarea :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="duracionEstimada" name="duracionEstimada" value="{{$tarea->duracionEstimada}}" type="text" class="validate" oninvalid="setCustomValidity('Ingresa la duracion')" oninput="setCustomValidity('')" required>
                                <label for="duracionEstimada">Duracion Estimada :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="duracionReal" name="duracionReal" value="{{$tarea->duracionReal}}" type="text" class="validate" oninvalid="setCustomValidity('Ingresa la duracion')" oninput="setCustomValidity('')" required>
                                <label for="duracionReal">Duracion Real :</label>
                            </div>

                            <div class="input-field col s6">
                                <select name="estado" oninvalid="setCustomValidity('Seleccione un estado')" oninput="setCustomValidity('')" required>
                                    <option value="" disabled selected>Escoja uno</option>
                                    <option value="En Proceso" {{ "En Proceso" == $tarea->estado ? 'selected':''}}>En Proceso</option>
                                    <option value="Finalizado" {{"Finalizado" == $tarea->estado ? 'selected':''}}>Finalizado</option>
                                </select>
                                <label for="estado">Estado :</label>
                            </div>

                            <div class="input-field col s6">
                                <select name="prioridad" oninvalid="setCustomValidity('Seleccione una prioridad')" oninput="setCustomValidity('')" required>
                                    <option value="" disabled selected>Escoja uno</option>
                                    <option value="Baja" {{ "Baja" == $tarea->prioridad ? 'selected':''}}>Baja</option>
                                    <option value="Media" {{"Media" == $tarea->prioridad ? 'selected':''}}>Media</option>
                                    <option value="Alta" {{"Alta" == $tarea->prioridad ? 'selected':''}}>Alta</option>
                                </select>
                                <label for="prioridad">Prioridad :</label>
                            </div>

                            <div class="input-field col s6">
                                <select name="id_persona" oninvalid="setCustomValidity('Seleccione un persona')" oninput="setCustomValidity('')" required>
                                    <option value="1" disabled selected>Escoja uno</option>
                                    @foreach($empleados as $empleado)
                                        <option value="{{$empleado->id}}" {{$empleado->id == $tarea->id_persona ? 'selected':''}}>{{$empleado->cargo}}</option>
                                    @endforeach
                                </select>
                                <label>Seleccione una persona</label>
                            </div>
                            
                            <div class="input-field col s12 m6">
                                <select name="id_item" oninvalid="setCustomValidity('Seleccione un persona')" oninput="setCustomValidity('')" required>
                                    <option value="" disabled selected>Escoja uno</option>
                                    @foreach($items as $item)
                                        <option value="{{$item->id}}" {{$item->id == $tarea->id_item ? 'selected':''}}>{{$item->nombre}}</option>
                                    @endforeach
                                </select>
                                <label>Seleccione un item</label>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col s12 right-align">
                                <a href="{{route('tarea.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>
                            <button class="btn blue darken-4 waves-effect waves-light" type="submit">Guardar
                            </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
