<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Domaine; // Ensure you import the related models
use App\Models\NiveauEtude;
use App\Models\TypeEtat;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgentFactory extends Factory
{
    protected $model = Agent::class;

    public function definition()
    {
        return [
            'matricule' => $this->faker->unique()->numerify('AG####'),
            'nom' => $this->faker->lastName,
            'postnom' => $this->faker->firstName,
            'prenom' => $this->faker->firstName,
            'date_naissance' => $this->faker->date(),
            'adresse' => $this->faker->address,
            'telephone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'date_engagement' => $this->faker->date(),
            'domaine_id' =>1,
            'niveau_etude_id' =>1,
            'type_etat_id' => 1 ,
        ];
    }
}