<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class Apicontroller extends Controller
{
    public $article = [
        0 => ['titolo' => 'titoloprova', 'descrizione' => 'descrizionepova'],
        1 => ['titolo' => 'titoloprova', 'descrizione' => 'descrizionepova'],
        2 => ['titolo' => 'titoloprova', 'descrizione' => 'descrizionepova'],
    ];

    public function articoli()
    {
        return $this->article;
    }

    public function saveToDatabes()
    {
        $article = new Article;
        Article::create([
            0 => ['title' => 'titoloprova', 'description' => 'descrizionepova'],
            1 => ['title' => 'titoloprova', 'description' => 'descrizionepova'],
            2 => ['title' => 'titoloprova', 'description' => 'descrizionepova'],
        ]
        );
        $article->save();
    }
}
