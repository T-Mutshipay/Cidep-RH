<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use Illuminate\Http\Request;

class DomaineController extends Controller
{
    public function index()
    {
        $domaines = Domaine::all();
        return view('domaines.index', compact('domaines'));
    }

    public function create()
    {
        return view('domaines.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom_domaine' => 'required|string|max:255',
            'code_domaine' => 'required|string|max:50',
            'detail_domaine' => 'nullable|string',
        ]);

        Domaine::create($validated);

        return redirect()->route('domaines.index')->with('success', 'Domaine créé avec succès.');
    }

    public function edit(Domaine $domaine)
    {
        return view('domaines.edit', compact('domaine'));
    }

    public function update(Request $request, Domaine $domaine)
    {
        $validated = $request->validate([
            'nom_domaine' => 'required|string|max:255',
            'code_domaine' => 'required|string|max:50',
            'detail_domaine' => 'nullable|string',
        ]);

        $domaine->update($validated);

        return redirect()->route('domaines.index')->with('success', 'Domaine mis à jour avec succès.');
    }

    public function destroy(Domaine $domaine)
    {
        $domaine->delete();
        return redirect()->route('domaines.index')->with('success', 'Domaine supprimé avec succès.');
    }
}
