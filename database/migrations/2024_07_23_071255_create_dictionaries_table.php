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
        Schema::create('dictionaries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250)->nullable();
            $table->index('name', 250)->nullable();
            $table->string('slug', 250)->nullable();
            $table->string('category', 25)->nullable();
            $table->string('group', 25)->nullable();
            $table->string('noun', 350)->nullable();
            $table->string('pronoun', 350)->nullable();
            $table->string('verb', 350)->nullable();
            $table->string('adverb', 350)->nullable();
            $table->string('adjective', 350)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dictionaries');
    }
};
