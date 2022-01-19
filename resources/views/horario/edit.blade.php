@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">

            <form action="{{route('horario.update',[$horario->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title center-align">Editar Horario</span>
                        <div class="row">

                            <div class="input-field col s6">
                                <input  id="turno" name="turno" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un turno valido')" oninput="setCustomValidity('')" required value="{{$horario->turno}}">
                                <label for="turno">Turno :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="duracion" name="duracion" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un duracion')" oninput="setCustomValidity('')" required value="{{$horario->duracion}}">
                                <label for="duracion">Duracion :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="cantidad_extra" name="cantidad_extra" type="number" class="validate" oninvalid="setCustomValidity('Ingresa una cantidad extra')" oninput="setCustomValidity('')" required value="{{$horario->cantidad_extra}}">
                                <label for="cantidad_extra">Cantidad Extra:</label>
                            </div>

                         
                            <div class="input-field col s12 m6">
                                <select name="id_persona" required>
                                    <option value="" disabled selected>Escoja uno</option>
                                    @foreach($empleados as $empleado)
                                        <option value="{{$empleado->id}}" {{$empleado->id_persona == $empleado->id ? 'selected':''}}>{{$empleado->cargo}}</option>
                                    @endforeach
                                </select>
                                <label>Seleccione una persona</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col s12 right-align">
                                <a href="{{route('horario.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>

                                <button class="btn deep-purple darken-3 waves-effect waves-light" type="submit">actualizar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection
