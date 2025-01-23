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
            'postnom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            "date_engagement" => 'required|date',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:agents',
        ]);
        // dd($request->all());
        $agent = new Agent([
            'matricule' => $request->get('matricule'),
            'nom' => $request->get('nom'),
            'postnom' => $request->get('postnom'),
            'prenom' => $request->get('prenom'),
            'date_naissance' => $request->get('date_naissance'),
            'adresse' => $request->get('adresse'),
            'telephone' => $request->get('telephone'),
            'email' => $request->get('email'),
            "date_engagement" => $request->get('date_engagement'),
        ]);

        $agent->save();

        return redirect('agents.index')->with('success', 'agent créé avec succes!');
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
