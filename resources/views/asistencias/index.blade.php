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
                        <th scope="col">Asistencias</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{ $usuario->id }}</th>
                        <form action="{{ route('registrar-asistencia', ['usuarioId' => $usuario->id]) }}" method="POST">
                                @csrf
                                <Input  type="hidden"  name="usuarioId" value="{{$usuario->id}}" >
                        <td>{{ $usuario->nombre }}</td>
                        <td>
                                <select name="estado" class="form-select">
                                    <option value=""></option>
                                    <option value="Presente">Presente</option>
                                    <option value="Falta">Falta</option>
                                    <option value="Media Falta">Media Falta</option>
                                </select><br>
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