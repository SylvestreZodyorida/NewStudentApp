<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fillieres_matieres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_filliere')->constrained('fillieres');
            $table->foreignId('id_matiere')->constrained('matieres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fillieres_matieres');
    }
};
