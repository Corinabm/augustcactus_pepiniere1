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
        Schema::create('plantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_id')->constrained('categories')->onDelete('restrict');
            $table->string('nom_commun');
            $table->string('nom_scientifique');
            $table->text('description');
            $table->decimal('prix', 8, 2)->unsigned();
            $table->string('taille');
            $table->string('exposition');
            $table->string('arrosage');
            $table->integer('stock')->unsigned()->default(0);
            $table->boolean('est_actif')->default(true);
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantes');
    }
};
