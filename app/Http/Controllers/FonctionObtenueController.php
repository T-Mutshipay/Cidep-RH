<?php

namespace App\Http\Controllers;

use App\Models\FonctionObtenue;
use App\Models\Agent;
use App\Models\Fonction;
use Illuminate\Http\Request;

class FonctionObtenueController extends Controller
{
    public function index()
    {
        $fonctionsObtenues = FonctionObtenue::with(['agent', 'fonction'])->get();
        return view('fonctions-obtenues.index', compact('fonctionsObtenues'));
    }

    public function create()
    {
        $agents = Agent::all();
        $fonctions = Fonction::all();
        return view('fonctions-obtenues.create', compact('agents', 'fonctions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'agent_id' => 'required|exists:agents,id',
            'fonction_id' => 'required|exists:fonctions,id',
            'date_obtention' => 'required|date',
        ]);

        FonctionObtenue::create($validated);

        return redirect()->route('fonctions-obtenues.index')->with('success', 'Fonction obtenue créée avec succès.');
    }

    public function edit(FonctionObtenue $fonctionObtenue)
    {
        $agents = Agent::all();
        $fonctions = Fonction::all();
        return view('fonctions-obtenues.edit', compact('fonctionObtenue', 'agents', 'fonctions'));
    }

    public function update(Request $request, FonctionObtenue $fonctionObtenue)
    {
        $validated = $request->validate([
            'agent_id' => 'required|exists:agents,id',
            'fonction_id' => 'required|exists:fonctions,id',
            'date_obtention' => 'required|date',
        ]);

        $fonctionObtenue->update($validated);

        return redirect()->route('fonctions-obtenues.index')->with('success', 'Fonction obtenue mise à jour avec succès.');
    }

    public function destroy(FonctionObtenue $fonctionObtenue)
    {
        $fonctionObtenue->delete();
        return redirect()->route('fonctions-obtenues.index')->with('success', 'Fonction obtenue supprimée avec succès.');
    }
}
