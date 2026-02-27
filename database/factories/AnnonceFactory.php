<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
        'nom' => $this->faker->word(), // Un mot au hasard
        'description' => $this->faker->sentence(), // Une phrase
        'prix' => $this->faker->randomFloat(2, 10, 1000), // Prix entre 10 et 1000
        'stock' => $this->faker->numberBetween(1, 50),

        $table->id();
            $table->string('titre');
            $table->string('description');
            $table->string('type');
            // Appartement, Maison, Villa, Magasin et Terrain
            $table->string('ville');
            $table->float('superficie');
            $table->boolean('neuf');
            $table->decimal('prix',12,2);
        */
        return [
            'titre' => $this->faker->word(4),
            'description' => $this->faker->paragraph(),
            'type' => $this->faker->randomElement(['Appartement', 'Maison', 'Villa', 'Magasin', 'Terrain']),
            'ville' => $this->faker->city(),
            'superficie' => $this->faker->randomFloat(2, 20, 500),
            'neuf' => $this->faker->boolean(),
            'prix' => $this->faker->randomFloat(2, 50000, 2000000)
        ];
    }
}
