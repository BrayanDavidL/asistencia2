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
                        <th scope="col">Puntos</th>
                        <th scope="col">Tema</th> 
                    </tr>
                </thead>
                <tbody>
    @foreach ($Pparticipacion as $Pparticipacion)
    <tr>
        <td>{{ $Pparticipacion->id }}</td>
        <td>{{ $Pparticipacion->fecha }}</td>
        <td>{{ $Pparticipacion->puntos }}</td>
        <td>{{ $Pparticipacion->tema }}</td>
        <td>{{ $Pparticipacion->usuario_id }}</td>
        
        @foreach ($aprendices as $aprendiz)
            @if ($Pparticipacion->usuario_id == $aprendiz->id)
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
