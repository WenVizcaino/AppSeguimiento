<?php

namespace App\Http\Controllers;

use App\Models\centrodeformacion;
use Illuminate\Http\Request;

class CentrodeformacionController extends Controller
{
    public function index()
    {
        $centros = centrodeformacion::all();
        return view('centrodeformacion.index', compact('centros'));
    }

    public function create()
    {
        return view('centrodeformacion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Numdoc' => 'required',
            'Codigo' => 'required',
            'Denominacion' => 'required',
        ]);

        centrodeformacion::create($request->all());

        return redirect()->route('centrodeformacion.index')
            ->with('success', 'Centro creado correctamente');
    }

    public function show(centrodeformacion $centrodeformacion)
    {
        return view('centrodeformacion.show', compact('centrodeformacion'));
    }

    public function edit(centrodeformacion $centrodeformacion)
    {
        return view('centrodeformacion.edit', compact('centrodeformacion'));
    }

    public function update(Request $request, centrodeformacion $centrodeformacion)
    {
        $request->validate([
            'Numdoc' => 'required',
            'Codigo' => 'required',
            'Denominacion' => 'required',
        ]);

        $centrodeformacion->update($request->all());

        return redirect()->route('centrodeformacion.index')
            ->with('success', 'Centro actualizado correctamente');
    }

    public function destroy(centrodeformacion $centrodeformacion)
    {
        $centrodeformacion->delete();

        return redirect()->route('centrodeformacion.index')
            ->with('success', 'Centro eliminado correctamente');
    }
}
