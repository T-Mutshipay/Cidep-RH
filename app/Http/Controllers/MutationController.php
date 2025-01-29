<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Direction;
use App\Models\Mutation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MutationNotification;

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
            'date_mutation' => 'required|date|after_or_equal:today',
        ]);

        $agent = Agent::find($request->agent_id);
        
        if ($agent->direction_id == $request->direction_id) {
            return redirect()->route('agents.show', $agent->id)->with('error', "L'agent est déjà dans cette direction.");
        }

        $existingMutation = Mutation::where('agent_id', $request->agent_id)
                        ->where('direction_id', $request->direction_id)
                        ->first();
        
        if ($existingMutation) {
            return redirect()->route('agents.show', $agent->id)->with('error', "Une mutation pour cet agent vers cette direction existe déjà.");
        }

        $mutation = Mutation::create([
            'agent_id' => $request->agent_id,
            'direction_id' => $request->direction_id,
            'date_mutation' => $request->date_mutation,
        ]);

        $mutation->load('agent', 'direction');

        Mail::to($agent->email)->send(new MutationNotification($mutation));

        return redirect()->route('agents.show', $agent->id)->with('success', 'Mutation créée avec succès et email envoyé!');
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
