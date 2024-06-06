<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        // Mock data - replace with actual data from database
        $games = [
            ['title' => 'Game 1', 'description' => 'Description for game 1'],
            ['title' => 'Game 2', 'description' => 'Description for game 2'],
            // Add more games as needed
        ];

        return view('games.index', compact('games'));
    }
}
