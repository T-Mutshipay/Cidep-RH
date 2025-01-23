<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomaineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        DB::table('domaines')->insert([
            ['code_domaine' => 'MATH', 'nom_domaine' => 'MATHEMATIQUE'],
            ['code_domaine' => 'INFO', 'nom_domaine' => 'INFORMATIQUE'],
            ['code_domaine' => 'DROIT', 'nom_domaine' => 'DROIT'],
            ['code_domaine' => 'MARK', 'nom_domaine' => 'MARKETING'],
            ['code_domaine' => 'COMPT', 'nom_domaine' => 'COMPTABILITE'],
            ['code_domaine' => 'MED', 'nom_domaine' => 'MEDECINE'],
            ['code_domaine' => 'PSYCHO', 'nom_domaine' => 'PSYCHOLOGIE'],
            ['code_domaine' => 'HIST', 'nom_domaine' => 'HISTOIRE'],
            ['code_domaine' => 'SC-SOC', 'nom_domaine' => 'SCIENCES SOCIAL'],
        ]);
    }
}
