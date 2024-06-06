<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    public function run()
    {
        Game::create([
            'title' => 'Game 1',
            'description' => 'Description for game 1',
        ]);

        Game::create([
            'title' => 'Game 2',
            'description' => 'Description for game 2',
        ]);

        // Adicione mais jogos conforme necessário
    }
}
