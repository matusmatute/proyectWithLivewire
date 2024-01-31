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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('console_id')->constrained();
            $table->string('name');
            $table->string('description');
            $table->string('franquice');
            $table->string('developer');
            $table->string('publisher');
            $table->string('release_date');
            $table->string('genere');
            $table->string('theme');
            $table->string('clasification');
            $table->string('type');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
