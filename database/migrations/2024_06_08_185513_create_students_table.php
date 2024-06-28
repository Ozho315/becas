<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->comment('Estudiantes');
            $table->id();
            $table->string('name', 45)->comment('Nombres');
            $table->string('last_name', 45)->comment('Apellidos');
            $table->string('identification_number', 15)->comment('Número de identificación');
            $table->double('average_rating')->comment('Promedio de calificaciones');
            $table->double('average_incomes')->comment('Promedio de ingresos');
            $table->boolean('is_disabled')->comment('¿Es discapacitado?');
            $table->string('phone_number', 10)->comment('Número de teléfono');
            $table->string('address', 45)->comment('Dirección');
            $table->string('profile_picture_path')->nullable()->comment('Ruta a la foto de perfil');
            $table->integer('semester')->comment('Semestre');
            $table->foreignId('major_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
