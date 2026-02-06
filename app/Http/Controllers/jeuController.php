<?php

namespace App\Http\Controllers;
use illuminate\Support\Number;
use Illuminate\Http\Request;

class jeuController extends Controller
{
    public $jeux = ['batman', 'spider', 'monopolie'];

    public function index(Request $request){

        $nomDuJeu = $request->query('nom');

        return "<p>le nom du jeu est: $nomDuJeu</p>";
    }

    public function Liste(){
        return view('catalogue', ['mesJeux' => $this->jeux]);
    }

    public function jeu(Request $request){
        $id = $request->query('id') ?? 'not-found';
    
        return view('jeuDetail', ['mesJeux' => $this->jeux, 'id' => $id]);
    }


}
