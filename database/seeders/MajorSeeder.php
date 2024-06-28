<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Major::create(['name' => 'Ingeniería en Redes y Telecommunicaciones', 'semesters' => 8]);
        Major::create(['name' => 'Ingeniería en Recursos Renovables', 'semesters' => 8]);
        Major::create(['name' => 'Ingeniería en Software', 'semesters' => 8]);
    }
}
