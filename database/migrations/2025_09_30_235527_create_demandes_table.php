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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plante_id')->constrained('plantes')->onDelete('cascade');
            $table->string('nom_plante');
            $table->decimal('prix_unitaire', 8, 2);
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('email');
            $table->string('horaires_indiques');
            $table->date('date_recuperation');
            $table->enum('mode_recuperation', ['sur_place', 'livraison']);
            $table->text('message')->nullable();
            $table->date('date_demande');
            $table->integer('quantite');
            $table->enum('statut', ['en_attente', 'confirmee', 'annulee', 'terminee'])->default('en_attente');
            $table->decimal('montant_total', 8, 2);
            $table->boolean('email_envoye')->default(false);
            $table->datetime('date_envoi_email')->nullable();
            $table->enum('statut_email', ['en_attente', 'envoye', 'echec'])->default('en_attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
