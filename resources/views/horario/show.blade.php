@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12 m10 l8 xl8 offset-m1 offset-l2 offset-xl2">
            <div class="card">
                <div class="card-content">

                    <div class="row">

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Turno:</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$horario->turno}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Duracion :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$horario->duracion}}</p>
                        </div>
                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Horas extras :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$horario->cantidad_extra}}</p>
                        

                    </div>

                </div>
                <div class="card-action cancel-primary-color">
                    <a href="{{route('item.index')}}" class="btn deep-purple darken-3 waves-effect waves-light" type="submit">aceptar</a>

                </div>
            </div>
        </div>
    </div>
@endsection
