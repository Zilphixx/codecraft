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
        Schema::create('class_conferences', function (Blueprint $table) {
            $table->id();
            $table->string('conference_name');
            $table->foreignIdFor(\App\Models\Classroom::class)->constrained()->cascadeOnDelete();
            $table->foreignId('teacher_id')->references('id')->on('users')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_conferences');
    }
};
