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
        Schema::create('quiz_session_questions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('quiz_session_id')->nullable();
            $table->foreign('quiz_session_id')->references('id')->on('quiz_sessions')->onDelete('cascade');

            $table->unsignedBigInteger('question_id')->nullable();
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');

            $table->tinyInteger('status')->default(0);
            $table->text('answers')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_session_questions');
    }
};
