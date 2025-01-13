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
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('classroom_id')->constrained('classrooms');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->text('description');
            $table->string('status');
            $table->dateTime('start_at');
            $table->dateTime('end_at')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meetings');
    }
};
