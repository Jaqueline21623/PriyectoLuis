<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use App\Models\Empresa;
use Illuminate\Http\Request;

class CrudConvocatoria extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $convocatoria= Convocatoria::all();
        return view('livewire.convocatorias',compact('convocatoria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresas= Empresa::all();
        return view('livewire.formulario',compact('empresas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'fechaInicio' => 'required|date',
            'fechaFin' => 'required|date|after_or_equal:fechaInicio',
            'vacante' => 'required|numeric|min:1',
            'jornada' => 'required',
        ]);

        // Guarda los datos en la base de datos
        $convocatoria = new Convocatoria();
        $convocatoria->emp_id = $request->input('empresa');
        $convocatoria->titulo = $request->input('titulo');
        $convocatoria->descripcion = $request->input('descripcion');
        $convocatoria->fechaInicio = $request->input('fechaInicio');
        $convocatoria->fechaFin = $request->input('fechaFin');
        $convocatoria->vacante = $request->input('vacante');
        $convocatoria->fechaFin = $request->input('fechaFin');
        $convocatoria->jornada = $request->input('jornada');
        $convocatoria->save();

        // Redirige con un mensaje de éxito
        return redirect('convocatoria');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
