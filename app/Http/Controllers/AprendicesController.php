<?php

namespace App\Http\Controllers;

use App\Models\aprendices;
use Illuminate\Http\Request;

class AprendicesController extends Controller
{
    public function index()
    {
        $aprendices = Aprendices::all();
        return view('aprendices.index', compact('aprendices'));
    }

    public function create()
    {
        return view('aprendices.create');
    }

    public function store(Request $request)
    {
        Aprendices::create($request->all());
        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendiz creado correctamente');
    }

    public function edit(Aprendices $aprendice)
    {
        return view('aprendices.edit', compact('aprendice'));
    }

    public function update(Request $request, Aprendices $aprendice)
    {
        $aprendice->update($request->all());
        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendiz actualizado correctamente');
    }

    public function destroy(Aprendices $aprendice)
    {
        $aprendice->delete();
        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendiz eliminado correctamente');
    }
}
