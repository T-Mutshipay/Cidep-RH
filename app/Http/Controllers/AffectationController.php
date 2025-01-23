<?php
namespace App\Http\Controllers;

use App\Models\Affectation;
use App\Models\Agent;
use App\Models\Service;
use Illuminate\Http\Request;

class AffectationController extends Controller
{
    public function index()
    {
        $affectations = Affectation::with(['agent', 'service'])->get();
        return view('affectations.index', compact('affectations'));
    }

    public function create()
    {
        $agents = Agent::all();
        $services = Service::all();
        return view('affectations.create', compact('agents', 'services'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'agent_id' => 'required|exists:agents,id',
            'service_id' => 'required|exists:services,id',
            'date_affectation' => 'required|date',
        ]);

        Affectation::create($validated);

        return redirect()->route('affectations.index')->with('success', 'Affectation créée avec succès.');
    }

    public function show(Affectation $affectation)
    {
        return view('affectations.show', compact('affectation'));
    }

    public function edit(Affectation $affectation)
    {
        $agents = Agent::all();
        $services = Service::all();
        return view('affectations.edit', compact('affectation', 'agents', 'services'));
    }

    public function update(Request $request, Affectation $affectation)
    {
        $validated = $request->validate([
            'agent_id' => 'required|exists:agents,id',
            'service_id' => 'required|exists:services,id',
            'date_affectation' => 'required|date',
        ]);

        $affectation->update($validated);

        return redirect()->route('affectations.index')->with('success', 'Affectation mise à jour avec succès.');
    }

    public function destroy(Affectation $affectation)
    {
        $affectation->delete();
        return redirect()->route('affectations.index')->with('success', 'Affectation supprimée avec succès.');
    }
}
