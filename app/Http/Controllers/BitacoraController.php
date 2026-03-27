<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Mail;

class BitacoraController extends Controller
{

    public function index()
    {
        $bitacoras = Bitacora::all();
        return view('bitacora.index', compact('bitacoras'));
    }

    public function create()
    {
        return view('bitacora.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'titulo' => 'required',
            'archivo' => 'required|mimes:pdf|max:2048'
        ]);

        $archivo = $request->file('archivo');

        $nombreArchivo = time().'_'.$archivo->getClientOriginalName();

        $archivo->move(public_path('bitacoras'), $nombreArchivo);

        $bitacora = Bitacora::create([
            'titulo' => $request->titulo,
            'archivo' => $nombreArchivo
        ]);

        /* ENVIO DE CORREO */

        Mail::raw('Se ha subido una nueva bitácora: '.$bitacora->titulo, function ($message) {
            $message->to('wendyvizcaino73@gmail.com')
                ->subject('Nueva Bitácora Subida');
        });

        return redirect()->route('bitacora.index')
            ->with('success','PDF subido y correo enviado correctamente');

    }

}
