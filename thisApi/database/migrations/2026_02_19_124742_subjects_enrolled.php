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
        Schema::create('subjects_enrolled', function (Blueprint $table){
            $table->id();

            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
   
            $table->foreign('student_id')->references('id')->on('student')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            
            $table->unsignedBigInteger('subject_schedule_id');

            $table->foreign('subject_schedule_id')->references('id')->on('subject_schedules')->onDelete('cascade');

            $table->decimal('GPA', 4,2)->nullable();
            $table->decimal('Grade', 4,2)->nullable();

            $table->string('schoolyear');
            
            $table->enum('semester', ['First', 'Second', 'Summer']);
            
            $table->enum('grade_status', ['Passed', 'Failed', 'Incomplete'])->default('Incomplete');

            $table->boolean('Retake')->default(0);

            $table->unique(
            ['student_id', 'subject_id', 'schoolyear', 'semester'],'unique_enrollment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects_enrolled');
    }
};
