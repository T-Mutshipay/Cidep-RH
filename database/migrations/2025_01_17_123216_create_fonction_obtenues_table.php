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
        Schema::create('fonction_obtenues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fonction_id')->constrained();
            $table->foreignId('agent_id')->constrained();
            $table->date('date_obtention');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fonction_obtenues');
    }
};
