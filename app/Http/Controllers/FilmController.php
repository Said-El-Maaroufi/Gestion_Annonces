<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FilmController extends Controller
{
    public function index(){
        
        $films = DB::table('films')->get();

        return view('cinema.film', compact('films'));
    }

    public function show($id){
        $film = DB::table('films')->find($id+1);
        return view('cinema.show', compact('id', 'film'));
    }


    


}
