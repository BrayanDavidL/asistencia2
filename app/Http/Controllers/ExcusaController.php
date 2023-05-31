<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Excusa;
use Illuminate\Http\Request;

class ExcusaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function json()
    {
        $excusa = Excusa::all();
        return response()->json($excusa);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Excusa $excusa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Excusa $excusa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Excusa $excusa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Excusa $excusa)
    {
        //
    }
}
