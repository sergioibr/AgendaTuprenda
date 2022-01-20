@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12 m10 l8 xl8 offset-m1 offset-l2 offset-xl2">
            <div class="card">
                <div class="card-content">
                    <h5 style="text-align: center">Detalle de la Tarea</h5>
                    <hr>
                    <br>
                    <div class="row">

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Descripcion:</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$tarea->descripcion}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Duracion Estimada :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$tarea->duracionEstimada}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Duracion Real :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{($tarea->duracionReal == "")?'N/A':$tarea->duracionReal}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Prioridad :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$tarea->prioridad}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Estado :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$tarea->estado}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Tipo de Tarea :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$tarea->tipo_tarea}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Fecha Tarea :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$tarea->fecha_tarea}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Item :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$item->nombre}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Encargado :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$encargado->cargo}}</p>
                        </div>

                    </div>

                </div>
                <div class="card-action cancel-primary-color">
                    <a href="{{route('tarea.index')}}" class="btn deep-purple darken-3 waves-effect waves-light" type="submit">aceptar</a>
                    @if ($tarea->estado == "En Proceso")
                        <a href="{{route('finalizarTarea', [$tarea->id])}}" class="btn deep-purple darken-3 waves-effect waves-light">Finalizar tarea</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
