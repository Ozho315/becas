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
        Major::create(['name' => 'Ingeniería en Telecommunicaciones', 'semesters' => 8]);
        Major::create(['name' => 'Ingeniería Textil', 'semesters' => 8]);
        Major::create(['name' => 'Ingeniería en Software', 'semesters' => 8]);
        Major::create(['name' => 'Ingeniería en Electricidad', 'semesters' => 8]);
        Major::create(['name' => 'Ingeniería Automotriz', 'semesters' => 8]);
        Major::create(['name' => 'Ingeniería en Mecatrónica', 'semesters' => 8]);
        Major::create(['name' => 'Ingeniería Industrial', 'semesters' => 8]);
    }
}
