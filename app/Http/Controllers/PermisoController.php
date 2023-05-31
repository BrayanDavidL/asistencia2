<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permisos = Permiso::all();
    
        $idsUsuarios = $permisos->pluck('usuario_id')->toArray();
        $aprendices = Usuario::whereIn('id', $idsUsuarios)->get();
        
    
        return view('permisos.consulta', [
            'permisos' => $permisos,
            'aprendices' => $aprendices
        ]);
    }

    public function json()
    {
        $permisos = Permiso::all();
        return response()->json($permisos);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $estado = $request->input('estado');
        $tipo = $request->input('tipo');
        $usuarioId = $request->input('usuarioId');

        $permisos = new Permiso;
        $permisos->fecha_hora = date('Y-m-d-h');
        $permisos->estado = $estado;
        $permisos->tipo_permiso = $tipo;
        $permisos->usuario_id = $usuarioId;
        $permisos->save();
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Permiso $permiso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permiso $permiso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permiso $permiso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permiso $permiso)
    {
        //
    }
}
