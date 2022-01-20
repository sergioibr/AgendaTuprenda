@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12 m10 l8 xl8 offset-m1 offset-l2 offset-xl2">
            <div class="card">
                <div class="card-content">
                <h5 style="text-align: center">Detalle del Item</h5>
                    <hr>
                    <br>
                    <div class="row">

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Nombre:</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$item->nombre}}</p>
                        </div>

                        <div class="col s12 m4">
                            <p class="light-secondary-color title-text-style ">Descripcion :</p>
                        </div>
                        <div class="col s8 offset-s2 m8">
                            <p class="accent-color-text">{{$item->descripcion}}</p>
                        </div>

                    </div>

                </div>
                <div class="card-action cancel-primary-color">
                    <a href="{{route('item.index')}}" class="btn blue darken-4 waves-effect waves-light" type="submit">aceptar</a>

                </div>
            </div>
        </div>
    </div>
@endsection
