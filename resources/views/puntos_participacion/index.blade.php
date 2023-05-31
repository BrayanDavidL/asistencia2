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
                        <th scope="col">Fecha</th>
                        <th scope="col">Puntos</th>
                        <th scope="col">Tema</th>  
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{ $usuario->id }}</th>
                        <form action="{{ route('registrar_puntoparticipacion', ['usuarioId' => $usuario->id]) }}" method="POST">
                                @csrf
                                <Input  type="hidden"  name="usuarioId" value="{{$usuario->id}}" >
                                <td>{{ $usuario->nombre }}</td>
                                <td><input type="date" id="fecha" name="fecha"></td>
                                <td><input type="number" name="puntos" id="puntos"></td>
                                <td><input type="text" name="tema" id="tema"></td>
                        <td><button type="submit" class="btn btn-success">Guardar</button>
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