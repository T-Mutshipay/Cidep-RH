<?php

namespace Database\Seeders;

use App\Models\TypeGrade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeGrades = [
            [
                'nom_type_grade' => 'SCIENTIFIQUE',
                'code_type_grade' => 'SC'
            ],
            [
                'nom_type_grade' => 'Administratif',
                'code_type_grade' => 'AD'
            ]
        ];
        foreach ($typeGrades as $typeGrade) {
            TypeGrade::create($typeGrade);
        }
    }
}
