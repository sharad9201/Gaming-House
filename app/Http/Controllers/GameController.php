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
    public function store(Request $request){
        // error_log(request('name'));
        // error_log(request('genre'));
        // error_log(request('quality'));

        // $game = new Game();
        
        // $game->name = request('name');
        // $game->genre = request('genre');
        // $game->quality = request('quality');
        // $game->offer = request('offer');

        // $game->save();
        Game::create($request->all());
        return redirect('/')->with('message','Thanks for the purchase');

    }

    public function destroy($id){
        $game = Game::findorFail($id);
        $game->delete();

        return redirect('/games');
    }

}
