<?php

namespace App\Http\Controllers;

use App\Models\enteconformador;
use Illuminate\Http\Request;

class EnteconformadorController extends Controller
{
    /**
     * Mostrar todos los registros
     */
    public function index()
    {
        $enteconformadores = enteconformador::all();
        return view('enteconformador.index', compact('enteconformadores'));
    }

    /**
     * Mostrar formulario de creación
     */
    public function create()
    {
        return view('enteconformador.create');
    }

    /**
     * Guardar nuevo registro
     */
    public function store(Request $request)
    {
        $request->validate([
            'tdoc' => 'required',
            'Numdoc' => 'required',
            'RazonSocial' => 'required',
            'Direccion' => 'required',
            'Telefono' => 'required',
            'CorreoInstitucional' => 'required|email',
        ]);

        enteconformador::create($request->all());

        return redirect()->route('enteconformador.index')
            ->with('success', 'Registro creado correctamente');
    }

    /**
     * Mostrar un registro específico
     */
    public function show(enteconformador $enteconformador)
    {
        return view('enteconformador.show', compact('enteconformador'));
    }

    /**
     * Mostrar formulario de edición
     */
    public function edit(enteconformador $enteconformador)
    {
        return view('enteconformador.edit', compact('enteconformador'));
    }

    /**
     * Actualizar registro
     */
    public function update(Request $request, enteconformador $enteconformador)
    {
        $request->validate([
            'Numdoc' => 'required',
            'Nombres' => 'required',
            'Apellidos' => 'required',
            'Direccion' => 'required',
            'Telefono' => 'required',
            'CorreoInstitucional' => 'required|email',
            'CorreoPersonal' => 'required|email',
            'sexo' => 'required',
            'fechaNacimiento' => 'required|date',
        ]);

        $enteconformador->update($request->all());

        return redirect()->route('enteconformador.index')
            ->with('success', 'Registro actualizado correctamente');
    }

    /**
     * Eliminar registro
     */
    public function destroy(enteconformador $enteconformador)
    {
        $enteconformador->delete();

        return redirect()->route('enteconformador.index')
            ->with('success', 'Registro eliminado correctamente');
    }
}
