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

        /**
         * Professors users
         */
        $professors = Professor::all();

        foreach ($professors as $index => $professor) {
            $profNumber = $index + 1;
            $userObj = User::create([
                'name' => "Professor #{$profNumber}",
                'email' => "professor_{$profNumber}@utn.edu.ec",
                'password' => 'utn-password',
            ]);
            $userObj->assignRole('professor');
            $professor->user()->save($userObj);
        }

        /**
         * Students users
         * TODO - Alonso: Implementar la lógica de usuarios de profesores para los estudiantes también
         */
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
