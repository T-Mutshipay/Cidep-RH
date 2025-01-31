<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\TypeEtat;
use App\Models\Domaine;
use App\Models\NiveauEtude;
use Illuminate\Http\Request;
class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $agents = Agent::with('domaine','niveau')->get();
        $domaines = Domaine::all();
        $niveaux = NiveauEtude::all();
        $etats = TypeEtat::all();
         
        return view('agents.index', compact('agents','domaines','niveaux','etats'));
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricule' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'postnom' => 'nullable|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'adresse' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
            'date_engagement' => 'required|date',
            'domaine_id' => 'required|exists:domaines,id',
            'niveau_etude_id' => 'required|exists:niveau_etudes,id',
            'type_etat_id' => 'required|exists:type_etats,id',
        ]);

        Agent::create($request->all());
        return redirect()->route('agents.index')->with('success', 'Agent ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agent = Agent::with('domaine', 'niveau')->findOrFail($id);
        return view('agents.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
/////////
