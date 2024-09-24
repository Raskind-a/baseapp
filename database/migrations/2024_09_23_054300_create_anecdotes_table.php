<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anecdotes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->foreignId('place_id')->nullable()->constrained();
            $table->foreignId('situation_id')->nullable()->constrained();
            $table->foreignId('character_id')->nullable()->constrained();
            $table->foreignId('action_id')->nullable()->constrained();
            $table->foreignId('user_id')->constrained();
            $table->float('rating')->nullable();
            $table->integer('votes')->nullable();
            $table->boolean('is_generated');
            $table->boolean('is_verified');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anecdotes');
    }
};
