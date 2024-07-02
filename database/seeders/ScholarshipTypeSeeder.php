<?php

namespace Database\Seeders;

use App\Models\ScholarshipType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScholarshipTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ScholarshipType::create(['name' => 'Beca-Rendimiento Academico', 'committee_id' => 1]);
        ScholarshipType::create(['name' => 'Beca-Discapacidad', 'committee_id' => 2]);
        ScholarshipType::create(['name' => 'Beca-Condición Económica', 'committee_id' => 3]);
        ScholarshipType::create(['name' => 'Beca-Condicion de Etnia', 'committee_id' => 4]);
        ScholarshipType::create(['name' => 'Beca-Clubes', 'committee_id' => 6]);
    }
}
