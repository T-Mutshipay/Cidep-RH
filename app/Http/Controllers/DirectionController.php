<?php 
namespace App\Http\Controllers;

use App\Models\Affectation;
use App\Models\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function index()
    {
        $affectations = Affectation::all();
        $directions = Direction::all();
        return view('directions.index', compact('directions','affectations'));
    }

    public function create()
    {
        return view('directions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom_direction' => 'required|string|max:255',
            'code_direction' => 'required|string|max:50',
        ]);

        Direction::create($validated);

        return redirect()->route('directions.index')->with('success', 'Direction créée avec succès.');
    }

    public function show(Direction $direction)
    {
        return view('directions.show', compact('direction'));
    }

    public function edit(Direction $direction)
    {
        return view('directions.edit', compact('direction'));
    }

    public function update(Request $request, Direction $direction)
    {
        $validated = $request->validate([
            'nom_direction' => 'required|string|max:255',
            'code_direction' => 'required|string|max:50',
        ]);

        $direction->update($validated);

        return redirect()->route('directions.index')->with('success', 'Direction mise à jour avec succès.');
    }

    public function destroy($id){
    $direction = Direction::findOrFail($id);
    $direction->delete();

    return redirect()->back()->with('success', 'Direction supprimée avec succès.');
    }

}
