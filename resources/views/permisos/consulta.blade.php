@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <table class="table table-sm table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Tipo Permisos</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Usuarios ID</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>
    @foreach ($permisos as $permiso)
    <tr>
        <td>{{ $permiso->id }}</td>
        <td>{{ $permiso->fecha_hora }}</td>
        <td>{{ $permiso->tipo_permiso }}</td>
        <td>{{ $permiso->estado }}</td>
        <td>{{ $permiso->usuario_id }}</td>
        
        @foreach ($aprendices as $aprendiz)
            @if ($permiso->usuario_id == $aprendiz->id)
                <td>{{ $aprendiz->nombre }}</td>
                @break
            @endif
        @endforeach
        
    </tr>
    @endforeach
</tbody>
            </table>
        </div>
    </div>
</div>
@endsection
