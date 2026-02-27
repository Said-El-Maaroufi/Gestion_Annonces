<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /*
    
    Annonce (id, titre, description, type, ville, superficie, neuf, prix, created_at, updated_at) */
    // database/migrations/xxxx_create_annonces_table.php
public function up(): void
{
    Schema::create('annonces', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->text('description'); // text est mieux pour les longues descriptions
        $table->enum('type', ['Appartement', 'Maison', 'Villa', 'Magasin', 'Terrain']);
        $table->string('ville');
        $table->float('superficie');
        $table->boolean('neuf');
        $table->decimal('prix', 12, 2);
        $table->string('photo')->nullable(); // Exercice 2
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
