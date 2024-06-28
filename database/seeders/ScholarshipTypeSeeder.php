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
        ScholarshipType::create(['name' => 'Beca tipo A', 'committee_id' => 1]);
        ScholarshipType::create(['name' => 'Beca tipo B', 'committee_id' => 2]);
        ScholarshipType::create(['name' => 'Beca tipo C', 'committee_id' => 3]);
        ScholarshipType::create(['name' => 'Beca tipo D', 'committee_id' => 1]);
    }
}
