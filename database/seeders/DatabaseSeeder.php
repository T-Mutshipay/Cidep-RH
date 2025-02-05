<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Direction;
use App\Models\Fonction;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        
        $this->call([
            DirectionSeeder::class,
            DomaineSeeder::class,
            FonctionSeeder::class,
            NiveauSeeder::class,
            TypeEtatSeeder::class,
            TypeGradeSeeder::class,
            GradeSeeder::class,
            ServiceSeeder::class
        ]);
        Agent::factory(10)->create();
    }
}
