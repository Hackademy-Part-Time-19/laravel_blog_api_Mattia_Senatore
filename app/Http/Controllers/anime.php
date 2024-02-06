<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Http;


class anime extends Controller
{
    
    public function home(){
        $response = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
        
        $generi = $response['data'];
        return view('homepage',['dati'=> $generi]);
    }

    public function bygenre($genre){
        $uri = 'https://api.jikan.moe/v4/anime?genres=' . $genre;
        $anime = Http::get($uri)->json()['data'];
        
        return view('genericard', compact('anime'));
    }

    public function club($id){
        $uri = 'https://api.jikan.moe/v4/clubs/' . $id;
        $anime = Http::get($uri)->json();
        
        return view('club', compact('anime'));
    }

    public function testApi(){
        return view('articoli');
    }
}
