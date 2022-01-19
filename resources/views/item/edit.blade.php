@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">

            <form action="{{route('item.update',[$item->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title center-align">Editar Cliente</span>
                        <div class="row">

                            <div class="input-field col s6">
                                <input  id="nombre" name="nombre" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un nombre valido')" oninput="setCustomValidity('')" required value="{{$item->nombre}}">
                                <label for="nombre">Nombre :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="descripcion" name="descripcion" type="text" class="validate" oninvalid="setCustomValidity('Ingresa una descripcion')" oninput="setCustomValidity('')" required value="{{$item->descripcion}}">
                                <label for="descripcion">Descripcion :</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 right-align">
                                <a href="{{route('item.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>

                                <button class="btn deep-purple darken-3 waves-effect waves-light" type="submit">actualizar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection
