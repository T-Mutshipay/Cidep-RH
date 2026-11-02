<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = [
            ['code_grade' => 'AA', 'nom_grade' => 'AGENT AUXILIAIRE', 'type_grade_id' => 2],
            ['code_grade' => 'AGB1', 'nom_grade' => 'AGENT DE BUREAU PREMIER CLASSE', 'type_grade_id' => 2],
            ['code_grade' => 'AGB2', 'nom_grade' => 'AGENT DE BUREAU DE DEUXIEME CLASSE', 'type_grade_id' => 2],
            ['code_grade' => 'ASS.P', 'nom_grade' => 'ASSISTANT DE PRATIQUE PROFESSIONNEL', 'type_grade_id' => 1],
            ['code_grade' => 'ASS2', 'nom_grade' => 'ASSISTANT DEUXIEME MANDAT', 'type_grade_id' => 1],
            ['code_grade' => 'ATB1', 'nom_grade' => 'ATTACHE DE BUREAU PREMIER CLASSE', 'type_grade_id' => 2],
            ['code_grade' => 'ATB2', 'nom_grade' => 'ATTACHE DE BUREAU DEUXIEME CLASSE', 'type_grade_id' => 2],
            ['code_grade' => 'BBL1', 'nom_grade' => 'BIBLIOTHECAIRE DE CLASSE 1', 'type_grade_id' => 2],
            ['code_grade' => 'BBL2', 'nom_grade' => 'BIBLIOTHECAIRE DE CLASSE 2', 'type_grade_id' => 2],
            ['code_grade' => 'BP', 'nom_grade' => 'BIBLIOTHECAIRE PRINCIPAL', 'type_grade_id' => 2],
            ['code_grade' => 'CB', 'nom_grade' => 'CHEF DE BUREAU', 'type_grade_id' => 2],
            ['code_grade' => 'CD', 'nom_grade' => 'CHEF DE DIVISION', 'type_grade_id' => 2],
            ['code_grade' => 'CPP1', 'nom_grade' => 'CHARGE DE PRATIQUE PROFESSIONNEL DE CLASSE 1', 'type_grade_id' => 2],
            ['code_grade' => 'CPP2', 'nom_grade' => 'CHARGE DE PRATIQUE PROFESSIONNEL DE CLASSE 2', 'type_grade_id' => 2],
            ['code_grade' => 'CT', 'nom_grade' => 'CHEF DE TRAVAUX', 'type_grade_id' => 1],
            ['code_grade' => 'DCS', 'nom_grade' => 'DIRECTEUR CHEF DE SERVICE', 'type_grade_id' => 2],
            ['code_grade' => 'HSS', 'nom_grade' => 'HUISSIER', 'type_grade_id' => 2],
            ['code_grade' => 'PA', 'nom_grade' => 'PROFESSEUR ASSOCIE', 'type_grade_id' => 1],
            ['code_grade' => 'PF', 'nom_grade' => 'PROFESSEUR FULL', 'type_grade_id' => 1],
            ['code_grade' => 'PO', 'nom_grade' => 'PROFESSEUR ORDINAIRE', 'type_grade_id' => 1],
        ];

        foreach ($grades as $grade) {
            Grade::create($grade);
        }
    }
}