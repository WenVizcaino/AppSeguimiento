<?php

namespace App\Http\Controllers;

use App\Models\enteconformador;
use Illuminate\Http\Request;

class EnteconformadorController extends Controller
{
    public function index()
    {
        $enteconformadores = enteconformador::paginate(10); // ← paginate en lugar de all()
        return view('enteconformador.index', compact('enteconformadores'));
    }

    public function create()
    {
        return view('enteconformador.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tdoc'               => 'required',
            'Numdoc'             => 'required',
            'RazonSocial'        => 'required|string|max:200',
            'Direccion'          => 'required|string|max:200',
            'Telefono'           => 'required|string|max:20',
            'CorreoInstitucional'=> 'required|email|max:200',
        ]);

        enteconformador::create($request->all());

        return redirect()->route('enteconformador.index')
            ->with('success', 'Registro creado correctamente');
    }

    public function show(enteconformador $enteconformador)
    {
        return view('enteconformador.show', compact('enteconformador'));
    }

    public function edit(enteconformador $enteconformador)
    {
        return view('enteconformador.edit', compact('enteconformador'));
    }

    public function update(Request $request, enteconformador $enteconformador)
    {
        $request->validate([
            'tdoc'               => 'required',
            'Numdoc'             => 'required',
            'RazonSocial'        => 'required|string|max:200',
            'Direccion'          => 'required|string|max:200',
            'Telefono'           => 'required|string|max:20',
            'CorreoInstitucional'=> 'required|email|max:200',
        ]);

        $enteconformador->update($request->all());

        return redirect()->route('enteconformador.index')
            ->with('success', 'Registro actualizado correctamente');
    }

    public function destroy(enteconformador $enteconformador)
    {
        $enteconformador->delete();

        return redirect()->route('enteconformador.index')
            ->with('success', 'Registro eliminado correctamente');
    }
}
