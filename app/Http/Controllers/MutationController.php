<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Direction;
use App\Models\Mutation;
use Illuminate\Http\Request;

class MutationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mutations = Mutation::with(['agent', 'direction'])->get();
        $agents = Agent::all();
        $directions = Direction::all();
        return view('mutations.index', compact('mutations', 'agents', 'directions'));
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
            'agent_id' => 'required|integer|exists:agents,id',
            'direction_id' => 'required|integer|exists:directions,id',
            'date_mutation' => 'required|date',
        ]);

        Mutation::create($request->all());

        return redirect()->route('mutations.index')->with('success', 'Mutation créée avec succès!');
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
