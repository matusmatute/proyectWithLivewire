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
        Schema::create('metadata', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained();
            $table->date('purshase_date');
            $table->string('calification');
            $table->string('tags');
            $table->string('times_played');
            $table->date('date_completed');
            $table->integer('time_of_completion');
            $table->string('notes');
            $table->boolean('have_it');
            $table->boolean('played');
            $table->boolean('playing');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metadata');
    }
};
