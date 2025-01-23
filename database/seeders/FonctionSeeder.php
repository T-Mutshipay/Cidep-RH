<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FonctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fonctions = [

            ['Code_fonction'=>'SG','Nom_fonction'=>'SECRETAIRE GENERAL','Detail_fonction'=>'Responsable de la gestion générale'],
            ['Code_fonction'=>'CP','Nom_fonction'=>'CHARGE DE PROGRAMME','Detail_fonction'=>'Gestion des programmes'],
            ['Code_fonction'=>'SAF','Nom_fonction'=>'SECRETAIRE ADMINISTRATIF ET FINANCIER','Detail_fonction'=>'Gestion administrative et financière'],
            ['Code_fonction'=>'DP','Nom_fonction'=>'DIRECTEUR PROVINCIAL','Detail_fonction'=>'Supervision provinciale'],
            ['Code_fonction'=>'DIR','Nom_fonction'=>'DIRECTEUR','Detail_fonction'=>'Direction générale'],
            ['Code_fonction'=>'COORDO-ACA','Nom_fonction'=>'COORDONNATEUR ACADEMIQUE','Detail_fonction'=>'Coordination académique'],
            ['Code_fonction'=>'COORDO-ADM','Nom_fonction'=>'COORDONNATEUR ADMINISTRATIF','Detail_fonction'=>'Coordination administrative'],
            ['Code_fonction'=>'CJ','Nom_fonction'=>'CONSEILLER JURIDIQUE','Detail_fonction'=>'Conseil juridique'],
            ['Code_fonction'=>'ENS','Nom_fonction'=>'ENSEIGNANT','Detail_fonction'=>'Enseignement'],
            ['Code_fonction'=>'SECR','Nom_fonction'=>'SECRETAIRE','Detail_fonction'=>'Secrétariat'],
        ];
        DB::table('fonctions')->insert($fonctions);

    }
}
