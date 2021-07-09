<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index(){

        // $games = [

        //     ['genre' => 'action', 'quality'=> 'HD'],
        //     ['genre' => 'RPG', 'quality'=> 'HD']
    
    
        // ];
        // $games = Game::all();
        $games = Game::orderBy('genre','desc')->get();
       
        return view('games.index',['games'=>$games]);
    
    }

    public function create(){
        
        return view('games.create');
    }

    public function show($id){

        $game = Game::findOrFail($id);

        return view('games.show', ['game' => $game]);
    }


}
