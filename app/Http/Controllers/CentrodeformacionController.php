<?php

namespace App\Http\Controllers;

use App\Models\centrodeformacion;
use Illuminate\Http\Request;

class CentrodeformacionController extends Controller
{
    public function index()
    {
        $listado = centrodeformacion::paginate(10);
        return view('centrodeformacion.index', compact('listado'));
    }

    public function create()
    {
        return view('centrodeformacion.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Codigo'        => 'required|string|max:50|unique:tbl_centrodeformacion,Codigo',
            'Denominacion'  => 'required|string|max:200',
            'Direccion'     => 'required|string|max:200',
            'Observaciones' => 'nullable|string|max:500',
        ]);

        centrodeformacion::create($validated);
        return redirect()->route('centrodeformacion.index')
            ->with('success', "Centro de formacion creado correctamente");
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
        $validated = $request->validate([
            'Codigo'        => 'required|string|max:50|unique:tbl_centrodeformacion,Codigo,' . $centrodeformacion->NIS . ',NIS',
            'Denominacion'  => 'required|string|max:200',
            'Direccion'     => 'required|string|max:200',
            'Observaciones' => 'nullable|string|max:500',
        ]);

        $centrodeformacion->update($validated);
        return redirect()->route('centrodeformacion.index')
            ->with('success', "Centro de formacion actualizado correctamente");
    }

    public function destroy(centrodeformacion $centrodeformacion)
    {
        $centrodeformacion->delete();
        return redirect()->route('centrodeformacion.index')
            ->with('success', "Centro de formacion eliminado correctamente");
    }
}
