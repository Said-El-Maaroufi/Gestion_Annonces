<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            ['titre' => 'Inception', 'pays' => 'USA', 'annee' => '2010', 'duree' => '02:28:00', 'genre' => 'Sci-Fi', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'The Dark Knight', 'pays' => 'USA', 'annee' => '2008', 'duree' => '02:32:00', 'genre' => 'Action', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Interstellar', 'pays' => 'USA', 'annee' => '2014', 'duree' => '02:49:00', 'genre' => 'Adventure', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Parasite', 'pays' => 'South Korea', 'annee' => '2019', 'duree' => '02:12:00', 'genre' => 'Thriller', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'The Godfather', 'pays' => 'USA', 'annee' => '1972', 'duree' => '02:55:00', 'genre' => 'Crime', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Pulp Fiction', 'pays' => 'USA', 'annee' => '1994', 'duree' => '02:34:00', 'genre' => 'Crime', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'The Matrix', 'pays' => 'USA', 'annee' => '1999', 'duree' => '02:16:00', 'genre' => 'Sci-Fi', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Gladiator', 'pays' => 'USA', 'annee' => '2000', 'duree' => '02:35:00', 'genre' => 'Action', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Leon: The Professional', 'pays' => 'France', 'annee' => '1994', 'duree' => '01:50:00', 'genre' => 'Drama', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Seven', 'pays' => 'USA', 'annee' => '1995', 'duree' => '02:07:00', 'genre' => 'Mystery', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'The Silence of the Lambs', 'pays' => 'USA', 'annee' => '1991', 'duree' => '01:58:00', 'genre' => 'Horror', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Django Unchained', 'pays' => 'USA', 'annee' => '2012', 'duree' => '02:45:00', 'genre' => 'Western', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'The Intouchables', 'pays' => 'France', 'annee' => '2011', 'duree' => '01:52:00', 'genre' => 'Comedy', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Fight Club', 'pays' => 'USA', 'annee' => '1999', 'duree' => '02:19:00', 'genre' => 'Drama', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Spirited Away', 'pays' => 'Japan', 'annee' => '2001', 'duree' => '02:05:00', 'genre' => 'Animation', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'The Lion King', 'pays' => 'USA', 'annee' => '1994', 'duree' => '01:28:00', 'genre' => 'Animation', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Blade Runner 2049', 'pays' => 'USA', 'annee' => '2017', 'duree' => '02:44:00', 'genre' => 'Sci-Fi', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Joker', 'pays' => 'USA', 'annee' => '2019', 'duree' => '02:02:00', 'genre' => 'Crime', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Whiplash', 'pays' => 'USA', 'annee' => '2014', 'duree' => '01:46:00', 'genre' => 'Music', 'created_at' => now(), 'updated_at' => now()],
            ['titre' => 'Oldboy', 'pays' => 'South Korea', 'annee' => '2003', 'duree' => '02:00:00', 'genre' => 'Action', 'created_at' => now(), 'updated_at' => now()]
            
            
        ]);

    }
}
