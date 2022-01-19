@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="card card_color">
                <form action="{{route('cliente.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-content">
                        <span class="card-title titulo text_color">Registrar un Cliente</span>
                        <div class="row">
                            <div class="input-field col s6">
                                <input  id="nombre" name="nombre" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un nombre valido')" oninput="setCustomValidity('')" required>
                                <label for="nombre">Nombre :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="apellido_paterno" name="apellido_paterno" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un apellido paterno valido')" oninput="setCustomValidity('')" required>
                                <label for="apellido_paterno">Apellido Paterno :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="apellido_materno" name="apellido_materno" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un apellido materno valido')" oninput="setCustomValidity('')" required>
                                <label for="apellido_materno">Apellido Materno :</label>
                            </div>

                            <div class="input-field col s6">
                                <input  id="carnet_identidad" name="carnet_identidad" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un carnet de identidad valido')" oninput="setCustomValidity('')" required>
                                <label for="carnet_identidad">Carnet de Identidad :</label>
                            </div>
                            <div class="input-field col s6">
                                <input  id="nit" name="nit" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un nit')" oninput="setCustomValidity('')" required>
                                <label for="nit">Nit :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="direccion" name="direccion" type="text" class="validate" oninvalid="setCustomValidity('Ingresa una direccion valida')" oninput="setCustomValidity('')" required>
                                <label for="direccion">Direccion :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="fecha_nacimiento" name="fecha_nacimiento" type="text" class="datepicker" oninvalid="setCustomValidity('Ingresa una fecha valida')" oninput="setCustomValidity('')" required>
                                <label for="fecha_nacimiento">Fecha de Nacimiento :</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="telefono" name="telefono" type="text" class="validate" oninvalid="setCustomValidity('Ingresa un telefono valido')" oninput="setCustomValidity('')" required>
                                <label for="telefono">Telefono :</label>
                            </div>
                            <div class="input-field col s12 ">
                                <input id="email" name="email" type="email" class="validate" oninvalid="setCustomValidity('Ingresa un correo valido')" oninput="setCustomValidity('')" required value="{{old('email')}}">
                                <label for="email">Correo:</label>
                                @error('email')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="input-field col s12 ">
                                <input id="password" name="password" type="password" class="validate" oninvalid="setCustomValidity('Ingresa una contraseña valida')" oninput="setCustomValidity('')" required value="{{old('password')}}" >
                                <label for="password">Contraseña :</label>
                                @error('password')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="input-field col s12 ">
                                <input id="password_confirmation" name="password_confirmation" type="password" class="validate" oninvalid="setCustomValidity('Las contraseñas no coinciden')" oninput="setCustomValidity('')" required>
                                <label for="password_confirmation">Confirmar Contraseña :</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 right-align">
                                <a href="{{route('cliente.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>
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
