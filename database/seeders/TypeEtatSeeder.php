<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeEtatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type_etats = [
            ['code_etat'=>'ACT ','nom_etat'=>'ACTIF','detail_etat'=>'no comment'],
            ['code_etat'=>'SUS','nom_etat'=>'SUSPENDU','detail_etat'=>'no comment'],
            ['code_etat'=> 'REV ','nom_etat'=>'REVOQUE','detail_etat'=>'no comment'],
            ['code_etat'=>'FORM ','nom_etat'=>'EN FORMATION','detail_etat'=>'no comment']
        ];
        DB::table('type_etats')->insert($type_etats);
    }
}
