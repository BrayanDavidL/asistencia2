<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Excuse;

class ExcuseController extends Controller
{
    
    
    public function index()
    {
        $excuses = Excuse::all();

        return response()->json(['success' => true, 'data' => $excuses]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'estado' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'descripcion' => 'required',
            'evidencia' => 'required',
            'tipo' => 'required',
            'usuario_id' => 'required'
        ]);

        $excuse = Excuse::create($request->all());

        return response()->json(['success' => true, 'data' => $excuse], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
