<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {       
        $directions = [
            ['code_direction' => 'SG', 'nom_direction' => 'SECRETARIAT GENERAL'],
            ['code_direction' => 'BSU', 'nom_direction' => 'BAS-UELE'],
            ['code_direction' => 'EQ', 'nom_direction' => 'EQUATEUR'],
            ['code_direction' => 'HT-K', 'nom_direction' => 'HAUT-KATANGA'],
            ['code_direction' => 'HT-L', 'nom_direction' => 'HAUT-LOMAMI'],
            ['code_direction' => 'HTU', 'nom_direction' => 'HAUT-UELE'],
            ['code_direction' => 'IT', 'nom_direction' => 'ITURI'],
            ['code_direction' => 'KAS', 'nom_direction' => 'KASAI'],
            ['code_direction' => 'KAS-C', 'nom_direction' => 'KASAI-CENTRAL'],
            ['code_direction' => 'KAS-O', 'nom_direction' => 'KASAI-ORIENTAL'],
            ['code_direction' => 'KIN', 'nom_direction' => 'KINSHASA'],
            ['code_direction' => 'KC', 'nom_direction' => 'KONGO-CENTRAL'],
            ['code_direction' => 'KWA', 'nom_direction' => 'KWANGO'],
            ['code_direction' => 'KWI', 'nom_direction' => 'KWILU'],
        ];
        DB::table('directions')->insert($directions);
    }
}
