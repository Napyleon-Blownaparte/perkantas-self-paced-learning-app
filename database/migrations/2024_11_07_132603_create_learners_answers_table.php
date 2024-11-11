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
        Schema::create('learners_answers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('attempt_history_id')->constrained('attempt_histories');
            $table->foreignId('question_id')->constrained('questions');
            $table->string('essay_answer');
            $table->integer('multiple_choice_answer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learners_answers');
    }
};
