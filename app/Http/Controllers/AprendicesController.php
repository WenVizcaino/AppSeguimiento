<?php

namespace App\Http\Controllers;

use App\Models\aprendices;
use Illuminate\Http\Request;

class AprendicesController extends Controller
{
    public function index()
    {
        $listado = aprendices::paginate(10);
        return view('aprendices.index', compact('listado'));
    }

    public function create()
    {
        return view('aprendices.create');
    }

    public function show(aprendices $aprendices)
    {
        return view('aprendices.show', compact('aprendices'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Numdoc'               => 'required|integer|unique:tbl_aprendices,Numdoc',
            'Nombres'              => 'required|string|max:100',
            'Apellidos'            => 'required|string|max:100',
            'Direccion'            => 'required|string|max:200',
            'Telefono'             => 'required|string|max:50',
            'CorreoInstitucional'  => 'required|email|max:50|unique:tbl_aprendices,CorreoInstitucional',
            'CorreoPersonal'       => 'required|email|max:50',
            'sexo'                 => 'required|integer|in:1,2,3',
            'fechaNacimiento'      => 'required|date|before:today',
        ]);

        aprendices::create($validated);
        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendiz creado correctamente');
    }

    public function edit(aprendices $aprendices)
    {
        return view('aprendices.edit', compact('aprendices'));
    }

    public function update(Request $request, aprendices $aprendices)
    {
        $validated = $request->validate([
            'Numdoc'               => 'required|integer|unique:tbl_aprendices,Numdoc,' . $aprendices->NIS . ',NIS',
            'Nombres'              => 'required|string|max:100',
            'Apellidos'            => 'required|string|max:100',
            'Direccion'            => 'required|string|max:200',
            'Telefono'             => 'required|string|max:50',
            'CorreoInstitucional'  => 'required|email|max:50|unique:tbl_aprendices,CorreoInstitucional,' . $aprendices->NIS . ',NIS',
            'CorreoPersonal'       => 'required|email|max:50',
            'sexo'                 => 'required|integer|in:1,2,3',
            'fechaNacimiento'      => 'required|date|before:today',
        ]);

        $aprendices->update($validated);
        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendiz actualizado correctamente');
    }

    public function destroy(aprendices $aprendices)
    {
        $aprendices->delete();
        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendiz eliminado correctamente');
    }
}
