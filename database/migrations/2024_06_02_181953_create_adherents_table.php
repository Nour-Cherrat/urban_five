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
        Schema::create('adherents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_classe')->constrained('classes')->index('id_classe_adherents')->onDelete('cascade');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('tel')->nullable();
            $table->enum('gender', ['F', 'M'])->default('M');
            $table->date('date_inscription');
            $table->date('date_fin')->nullable();
            $table->date('date_naissance')->nullable();
            $table->enum('statut', ['Actif', 'Non-actif'])->default('Actif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adherents');
    }
};
