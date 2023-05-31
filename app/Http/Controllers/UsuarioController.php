<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Asistencia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::where('rol', 'aprendiz')->get();
        return view('asistencias.index',['usuarios'=>$usuarios]);
    }

    public function permiso()
    {
        $usuarios = Usuario::where('rol', 'aprendiz')->get();
        return view('permisos.index',['usuarios'=>$usuarios]);
    }

    public function PuntosPaticipacion()
    {
        $usuarios = Usuario::where('rol', 'aprendiz')->get();
        return view('puntos_participacion.index',['usuarios'=>$usuarios]);
    }

    public function json(){
      
            $usuarios = Usuario::all();
            return response()->json($usuarios);
  
    }
    public function create(Request $request)
    {

       
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
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
