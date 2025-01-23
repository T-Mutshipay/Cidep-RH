<?php

namespace App\Http\Controllers;

use App\Models\Fonction;
use Illuminate\Http\Request;

class FonctionController extends Controller
{
    public function index()
    {
        $fonctions = Fonction::all();
        return view('fonctions.index', compact('fonctions'));
    }

    public function create()
    {
        return view('fonctions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom_fonction' => 'required|string|max:255',
            'code_fonction' => 'required|string|max:50',
            'detail_fonction' => 'nullable|string',
        ]);

        Fonction::create($validated);

        return redirect()->route('fonctions.index')->with('success', 'Fonction créée avec succès.');
    }

    public function edit(Fonction $fonction)
    {
        return view('fonctions.edit', compact('fonction'));
    }

    public function update(Request $request, Fonction $fonction)
    {
        $validated = $request->validate([
            'nom_fonction' => 'required|string|max:255',
            'code_fonction' => 'required|string|max:50',
            'detail_fonction' => 'nullable|string',
        ]);

        $fonction->update($validated);

        return redirect()->route('fonctions.index')->with('success', 'Fonction mise à jour avec succès.');
    }

    public function destroy(Fonction $fonction)
    {
        $fonction->delete();
        return redirect()->route('fonctions.index')->with('success', 'Fonction supprimée avec succès.');
    }
}
