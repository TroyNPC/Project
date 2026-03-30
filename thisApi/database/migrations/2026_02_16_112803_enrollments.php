<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->string('programs_id');
            $table->string('schoolyear');
            $table->enum('semester', ['first', 'second', 'summer']);
            $table->enum('status', ['enrolled', 'pending', 'dropped', 'graduated'])->default('pending');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('student')->onDelete('cascade');
            $table->foreign('programs_id')->references('code')->on('programs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
