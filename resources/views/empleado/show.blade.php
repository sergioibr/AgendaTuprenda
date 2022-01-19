@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12 m10 l8 xl8 offset-m1 offset-l2 offset-xl2">
            <div class="card">
                <div class="card-content">

                    <div class="row">

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Nombre:</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$empleado->persona->nombre}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Apellido Paterno:</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$empleado->persona->apellido_paterno}}</p>
                        </div>
                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Apellido Materno:</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$empleado->persona->apellido_materno}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Carnet de Identidad :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$empleado->persona->carnet_identidad}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Direccion :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$empleado->persona->direccion}}</p>
                        </div>
                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Fecha de Nacimiento:</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$empleado->persona->fecha_nacimiento}}</p>
                        </div>
                    
                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Telefono:</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$empleado->persona->telefono}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Correo:</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$empleado->persona->user->email}}</p>
                        </div>

                    </div>

                </div>
                <div class="card-action cancel-primary-color">
                    <a href="{{route('empleado.index')}}" class="btn deep-purple darken-3 waves-effect waves-light" type="submit">aceptar</a>

                </div>
            </div>
        </div>
    </div>
@endsection
