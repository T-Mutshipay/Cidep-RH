<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('niveau_etudes')->insert([
            [ 'NOM_NIVEAU' => "DIPLOME D'ETAT"],
            ['NOM_NIVEAU' => 'GRADUAT'],
            ['NOM_NIVEAU' => 'LICENCE'],
            ['NOM_NIVEAU' => "DIPLOME D'ETUDE APPROFONDI"],
            ['NOM_NIVEAU' => 'BACHELOR'],
            ['NOM_NIVEAU' => 'MASTER'],
            ['NOM_NIVEAU' => 'DOCTORAT PHD'],
        ]);
    }
}
