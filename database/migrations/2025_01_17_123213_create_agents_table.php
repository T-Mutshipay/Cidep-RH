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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('matricule', 50);
            $table->string('nom', 255);
            $table->string('postnom', 255);
            $table->string('prenom', 255);
            $table->date('date_naissance');
            $table->string('adresse', 100);
            $table->string('telephone', 15);
            $table->string('email', 255)->nullable();
            $table->date('date_engagement');
            $table->foreignId('domaine_id')->constrained('domaines')->onDelete('cascade');
            $table->foreignId('niveau_id')->constrained('niveau_etudes')->onDelete('cascade');
            $table->foreignId('etat_id')->constrained('type_etats')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
