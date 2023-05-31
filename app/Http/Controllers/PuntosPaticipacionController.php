<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\PuntosPaticipacion;
use Illuminate\Http\Request;

class PuntosPaticipacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Pparticipacion = PuntosPaticipacion::all();
    
        $idsUsuarios = $Pparticipacion->pluck('usuario_id')->toArray();
        $aprendices = Usuario::whereIn('id', $idsUsuarios)->get();
        
        return view('puntos_participacion.consulta', [
            'Pparticipacion' => $Pparticipacion,
            'aprendices' => $aprendices
        ]);
    }

    public function json()
    {
        $participacionPuntos = PuntosPaticipacion::all();
        return response()->json($participacionPuntos);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $usuarioId = $request->input('usuarioId');
        $puntos = $request->input('puntos');
        $tema = $request->input('tema');

        $permisos = new PuntosPaticipacion;
        $permisos->fecha= date('Y-m-d');
        $permisos->puntos = $puntos;
        $permisos->tema = $tema;
        $permisos->usuario_id = $usuarioId;
        $permisos->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(PuntosPaticipacion $puntosPaticipacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PuntosPaticipacion $puntosPaticipacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PuntosPaticipacion $puntosPaticipacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PuntosPaticipacion $puntosPaticipacion)
    {
        //
    }
}
