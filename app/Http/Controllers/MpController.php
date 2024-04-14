<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Mp;

class MpController extends Controller
{
    // Mostrar una lista de recursos
    public function index()
    {
        $mps = Mp::all();
        return view('mps.index', compact('mps'));
    }

    // Mostrar el formulario para crear un nuevo recurso
    public function create()
    {
        return view('mps.create');
    }

    // Almacenar un recurso recién creado en el almacenamiento.
    public function store(Request $request)
    {
        // Validar los datos del formulario, por ejemplo:
        $request->validate([
            'campo1' => 'required',
            'campo2' => 'required',
            // Añade aquí las validaciones necesarias para tus campos
        ]);

        // Crear un nuevo objeto Mp y guardar en la base de datos
        Mp::create($request->all());

        // Redireccionar a la página de índice con un mensaje de éxito
        return redirect()->route('mps.index')
            ->with('success', 'Mp creado exitosamente.');
    }

    // Mostrar el recurso especificado.
    public function show($id)
    {
        $mp = Mp::findOrFail($id);
        return view('mps.show', compact('mp'));
    }

    // Mostrar el formulario para editar el recurso especificado.
    public function edit($id)
    {
        $mp = Mp::findOrFail($id);
        return view('mps.edit', compact('mp'));
    }

    // Actualizar el recurso especificado en el almacenamiento.
    public function update(Request $request, $id)
    {
        $request->validate([
            'campo1' => 'required',
            'campo2' => 'required',
            // Añade aquí las validaciones necesarias para tus campos
        ]);

        $mp = Mp::findOrFail($id);
        $mp->update($request->all());

        return redirect()->route('mps.index')
            ->with('success', 'Mp actualizado exitosamente.');
    }

    // Eliminar el recurso especificado del almacenamiento.
    public function destroy($id)
    {
        $mp = Mp::findOrFail($id);
        $mp->delete();

        return redirect()->route('mps.index')
            ->with('success', 'Mp eliminado exitosamente.');
    }
}
