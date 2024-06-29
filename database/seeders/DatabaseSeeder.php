<?php

namespace Database\Seeders;

use App\Models\Major;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MajorSeeder::class,
            StudentSeeder::class,
            CommitteeSeeder::class,
            ProfessorSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ScholarshipTypeSeeder::class,
        ]);
    }
}
