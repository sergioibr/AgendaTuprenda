@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="card card_color">
                <form action="{{route('horario.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-content">
                        <span class="card-title titulo text_color">Registrar en Horario</span>
                        <div class="row">
                            <div class="input-field col s6">
                                <input  id="turno" name="turno" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un turno')" oninput="setCustomValidity('')" required>
                                <label for="turno">Turno :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="duracion" name="duracion" type="number" class="validate" oninvalid="setCustomValidity('Ingresa un duracion')" oninput="setCustomValidity('')" required>
                                <label for="duracion">Duracion :</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="cantidad_extra" name="cantidad_extra" type="number" class="validate" oninvalid="setCustomValidity('Ingresa un cantidad extra')" oninput="setCustomValidity('')" required>
                                <label for="cantidad_extra">Cantidad extra :</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="id_persona" oninvalid="setCustomValidity('Seleccione un persona')" oninput="setCustomValidity('')" required>
                                    <option value="" disabled selected>Escoja uno</option>
                                    @foreach($empleados as $empleado)
                                        <option value="{{$empleado->id}}">{{$empleado->cargo}}</option>
                                    @endforeach
                                </select>
                                <label>Seleccione una persona</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 right-align">
                                <a href="{{route('horario.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>
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
