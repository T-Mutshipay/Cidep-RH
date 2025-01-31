<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\TypeGrade;
class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = TypeGrade::all();
        $grades = Grade::all();
        return view('grades.index', compact('grades', 'types'));
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
        $validated = $request->validate([
            'nom_grade' => 'required|string|max:255',
            'code_grade' => 'required|string|max:50|unique:grades,code_grade',
            'type_grade_id' => 'required|exists:type_grades,id',
        ]);
        Grade::create([
            'nom_grade' => $request->nom_grade,
            'code_grade' => $request->code_grade,
            'type_grade_id' => $request->type_grade_id,
        ]);

        return redirect()->route('grades.index')->with('success', 'Grade créé avec succès.');
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
        $grade = Grade::findOrfail($id);
        $grade->delete();
        return redirect()->back()->with('success', 'Grade supprimé avec succès.');
    }
}
