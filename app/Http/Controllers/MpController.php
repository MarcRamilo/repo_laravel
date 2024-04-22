<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Mp;

class MpController extends Controller
{
    public function index()
    {
        $mps = Mp::all();
        return view('mps.index', compact('mps'));
    }

    public function create()
    {
        return view('mps.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'campo1' => ['required', 'unique:mps'],
            'campo2' => 'required',
        ]);

        Mp::create($request->all());
        $mp = new Mp();
        $mp->campo1 = $request->campo1;
        $mp->campo2 = $request->campo2;
        // $mp->save();
        return redirect()->route('mps.index')
            ->with('success', 'Mp creat exitosament.');
    }

    public function show($id)
    {
        $mp = Mp::findOrFail($id);
        return view('mps.show', compact('mp'));
    }

    public function edit($id)
    {
        $mp = Mp::findOrFail($id);
        return view('mps.edit', compact('mp'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'campo1' => 'required',
            'campo2' => 'required',
        ]);

        $mp = Mp::findOrFail($id);
        $mp->update($request->all());

        return redirect()->route('mps.index')
            ->with('success', 'Mp actualitzat exitosament.');
    }

    public function destroy($id)
    {
        $mp = Mp::findOrFail($id);
        $mp->delete();

        return redirect()->route('mps.index')
            ->with('success', 'Mp eliminat exitosament.');
    }
}
