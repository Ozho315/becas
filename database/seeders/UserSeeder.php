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
                'name' => $professor->name,
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
        $students = Student::all();

        foreach ($students as $student) {
            $user = new User();
            $user->name = $student->name;
            $user->email = "student{$student->id}@utn.edu.ec";
            $user->password = 'utn-password';
            $user->save();
            $student->user()->save($user);
        }
    }
}
