@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="card card_color">
                <form action="{{route('item.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-content">
                        <span class="card-title titulo text_color">Registrar un Item</span>
                        <div class="row">
                            <div class="input-field col s6">
                                <input  id="nombre" name="nombre" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un nombre valido')" oninput="setCustomValidity('')" required>
                                <label for="nombre">Nombre :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="descripcion" name="descripcion" type="text" class="validate" oninvalid="setCustomValidity('Ingresa una descripcion valida')" oninput="setCustomValidity('')" required>
                                <label for="descripcion">Descripcion :</label>
                            </div>
                            <div class="row">
                            <div class="col s12 right-align">
                                <a href="{{route('item.index')}}" class="btn negative-primary-color" type="submit">Cancelar</a>
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
