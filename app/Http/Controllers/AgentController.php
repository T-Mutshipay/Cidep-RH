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
        $agents = Agent::all();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
