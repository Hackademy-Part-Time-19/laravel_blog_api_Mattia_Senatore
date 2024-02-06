<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Apicontroller extends Controller
{
    public $article = [0 => ['titolo' => 'titoloprova', 'descrizione' => 'descrizionepova'],
    1 => ['titolo' => 'titoloprova', 'descrizione' => 'descrizionepova'],
    2 => ['titolo' => 'titoloprova', 'descrizione' => 'descrizionepova'],];

    public function articoli(){
return $this->article;
    }
}
