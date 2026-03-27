<?php

namespace App\Http\Controllers;

use App\Models\fichadecaracterizacion;
use Illuminate\Http\Request;

class FichadecaracterizacionController extends Controller
{
    public function index()
    {
        $fichas = fichadecaracterizacion::paginate(10);
        return view('fichadecaracterizacion.index', compact('fichas'));
    }

    public function create()
    {
        return view('fichadecaracterizacion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Codigo'        => 'required',
            'Denominacion'  => 'required',
            'Cupo'          => 'required|integer',
            'fechaInicio'   => 'required|date',
            'fechaFin'      => 'required|date|after:fechaInicio',
            'Observaciones' => 'required',
        ]);

        fichadecaracterizacion::create($request->all());

        return redirect()->route('fichadecaracterizacion.index')
            ->with('success', 'Registro creado correctamente');
    }

    public function show(fichadecaracterizacion $fichadecaracterizacion)
    {
        return view('fichadecaracterizacion.show', compact('fichadecaracterizacion'));
    }

    public function edit(fichadecaracterizacion $fichadecaracterizacion)
    {
        return view('fichadecaracterizacion.edit', compact('fichadecaracterizacion'));
    }

    public function update(Request $request, fichadecaracterizacion $fichadecaracterizacion)
    {
        $request->validate([
            'Codigo'        => 'required',
            'Denominacion'  => 'required',
            'Cupo'          => 'required|integer',
            'fechaInicio'   => 'required|date',
            'fechaFin'      => 'required|date|after:fechaInicio',
            'Observaciones' => 'required',
        ]);

        $fichadecaracterizacion->update($request->all());

        return redirect()->route('fichadecaracterizacion.index')
            ->with('success', 'Registro actualizado correctamente');
    }

    public function destroy(fichadecaracterizacion $fichadecaracterizacion)
    {
        $fichadecaracterizacion->delete();

        return redirect()->route('fichadecaracterizacion.index')
            ->with('success', 'Registro eliminado correctamente');
    }
}



