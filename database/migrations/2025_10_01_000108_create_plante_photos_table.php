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
        Schema::create('plante_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plante_id')->constrained('plantes')->onDelete('cascade');
            $table->string('photo_url');
            $table->boolean('est_principale')->default(false);
            $table->integer('ordre')->default(0);
            $table->timestamps();
            
            $table->index(['plante_id', 'est_principale']);
            $table->index(['plante_id', 'ordre']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plante_photos');
    }
};
