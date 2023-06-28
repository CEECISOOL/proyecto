<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciasController extends Controller
{
    //
    public function insert(Request $request)
    {
        $request->validate([ //valida los campos que estoy recibiendo
            'detalle' => 'required|min:3' //valido que detalle sea requerido y que minimo tenga 3caracteres    
        ]);

        $provincia = new Provincia();
        //$provincia->detalle = $request->title;
        $provincia->detalle = $request->input('detalle');
        $provincia->save();

        return redirect()->route('provincias')->with('success', 'Provincia creada correctamente');
    }

    public function view()
    {
        $provincias = Provincia::all();
        return view('provincias', ['provincias' => $provincias]);
    }

    public function pforCodigo($codigo)
    {
        $provincia = Provincia::where('codigo', $codigo)->first();
        return view('provincia', ['provincia' => $provincia]);
    }

    public function update(Request $request, $codigo)
    {
        $campoCondicion = $codigo;
        $nuevoValor = $request->input('detalle');

        Provincia::where('codigo', $campoCondicion)
            ->update(['detalle' => $nuevoValor]);

        return redirect()->route('provincias')->with('success', 'Provincia actualizada correctamente');
    }

    public function delete($codigo)
    {
        $provincia = Provincia::where('codigo', $codigo)->delete();

        return redirect()->route('provincias')->with('success', 'Provincia eliminada correctamente!');
    }
}
