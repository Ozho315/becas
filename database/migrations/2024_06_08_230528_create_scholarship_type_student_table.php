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
        Schema::create('scholarship_type_student', function (Blueprint $table) {
            $table->unsignedBigInteger('scholarship_type_id');
            $table->unsignedBigInteger('student_id');
            $table->integer('semester')->comment('Semestre');
            $table->timestamps();

            $table->foreign('scholarship_type_id')->references('id')->on('scholarship_types')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_type_student');
    }
};
