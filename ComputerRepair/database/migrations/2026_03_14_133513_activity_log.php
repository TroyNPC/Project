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
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->nullable()->references('id')->on('users')->nullOnDelete();

            $table->string('action');

            $table->string('subject_type');
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->text('description')->nullable();

            $table->json('properties')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if(Schema::hastable('activity_logs')) {
            Schema::dropIfExists('activity_logs');
        }
    }
};
