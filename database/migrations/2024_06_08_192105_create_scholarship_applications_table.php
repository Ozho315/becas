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
        Schema::create('scholarship_applications', function (Blueprint $table) {
            $table->comment('Solicitudes de beca');
            $table->id();
            $table->boolean('is_approved')->nullable()->default(null);
            $table->json('documents')->nullable()->default(null)->comment('Documentos adjuntos a la beca con sus rutas');
            $table->foreignId('scholarship_type_id')->constrained();
            $table->foreignId('student_id')->constrained();
            $table->foreignId('committee_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_applications');
    }
};
