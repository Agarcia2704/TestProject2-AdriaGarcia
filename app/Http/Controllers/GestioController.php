<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Informacion;

class GestioController extends Controller
{
    public function index(Request $request)
    {
        $informacion = Informacion::all();

        if ($request->wantsJson()) {
            return response()->json(['informacion' => $informacion]);
        }

        return Inertia::render('Gestio', ['informacion' => $informacion]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'etapa' => 'required|string',
            'descripcio' => 'required|string|max:150',
            'visible' => 'boolean',
        ]);

        Informacion::create($request->all());

        return response()->json(['message' => 'Curso creado correctamente']);
    }

    public function update(Request $request, $id)
    {
        $informacion = Informacion::findOrFail($id);

        $request->validate([
            'nom' => 'required|string',
            'etapa' => 'required|string',
            'descripcio' => 'required|string|max:150',
            'visible' => 'boolean',
        ]);

        $informacion->update($request->all());

        return response()->json(['message' => 'Curso actualizado correctamente']);
    }

    public function destroy($id)
{
    $informacion = Informacion::findOrFail($id);
    $informacion->delete();

    return redirect()->back()->with('success', 'Curso eliminado correctamente');
}

    
}
