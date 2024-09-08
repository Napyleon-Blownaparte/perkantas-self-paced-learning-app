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
        Schema::create('multiple__choice__options', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('multiple_choice_question_id')->constrained('multiple_choice_question');
            $table->string('option_text');
            $table->boolean('is_true_option');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiple__choice__options');
    }
};
