<?php

namespace Database\Seeders;

use App\Models\Professor;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrator = User::create([
            'name' => 'Administrador',
            'email' => 'admin@utn.edu.ec',
            'password' => 'utn-password',
        ]);
        $administrator->assignRole('admin');

        $professorUser = User::create([
            'name' => 'Profesor',
            'email' => 'professor@utn.edu.ec',
            'password' => 'utn-password',
        ]);
        $professorUser->assignRole('professor');
        $professorObj = Professor::find(1);
        $professorObj->user()->save($professorUser);


        $studentUser = User::create([
            'name' => 'Estudiante',
            'email' => 'student@utn.edu.ec',
            'password' => 'utn-password',
        ]);
        $studentUser->assignRole('student');
        $studentObj = Student::find(1);
        $studentObj->user()->save($studentUser);
    }
}
