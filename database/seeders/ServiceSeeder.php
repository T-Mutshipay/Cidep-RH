<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            ['code_service' => 'RH', 'nom_service' => 'RESSOURCES HUMAINES',"detail_service"=>"..."],
            ['code_service' => 'AP-C', 'nom_service' => 'APPARITORIAT CENTRAL',"detail_service"=>"..."],
            ['code_service' => 'AP', 'nom_service' => 'APPARITORIAT',"detail_service"=>"..."],
            ['code_service' => 'MARK', 'nom_service' => 'MARKETING',"detail_service"=>"..."],
            ['code_service' => 'FIN', 'nom_service' => 'FINANCE',"detail_service"=>"..."],
            ['code_service' => 'PATRI', 'nom_service' => 'PATRIMOINE',"detail_service"=>"..."],
            ['code_service' => 'ACAD', 'nom_service' => 'ACADEMIQUE',"detail_service"=>"..."],
            ['code_service' => 'ADMIN', 'nom_service' => 'ADMINISTRATION',"detail_service"=>"..."],
            ['code_service' => 'AFF-SO', 'nom_service' => 'AFFAIRE SOCIAL',"detail_service"=>"..."],
        ];

        foreach ($services as $service) {
            DB::table('services')->insert($service);
        }
    }
}