@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-sm table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha y Hora</th>
                        <th scope="col">Tipo de Permisos</th>
                        <th scope="col">Estado</th>   
                        <th scope="col">Funcion</th>    
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{ $usuario->id }}</th>
                        <form action="{{ route('registrar_permiso', ['usuarioId' => $usuario->id]) }}" method="POST">
                                @csrf
                                <Input  type="hidden"  name="usuarioId" value="{{$usuario->id}}" >
                                <td>{{ $usuario->nombre }}</td>
                                <td><input type="datetime-local" id="fecha-hora" name="fecha-hora"></td>
                        <td><select name="tipo" class="form-select">
                                    <option value=""></option>
                                    <option value="Baño">Baño</option>
                                    <option value="Bienestar">Bienestar</option>
                                    <option value="Otros">Otros</option>
                                </select></td>
                        <td><select name="estado" class="form-select">
                                    <option value=""></option>
                                    <option value="Activo">Activo</option>
                                    <option value="Finalizado">Finalizado</option>
                                </select></td>
                                
                        <td>
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection