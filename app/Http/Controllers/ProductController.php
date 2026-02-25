<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Compte;
use Illuminate\Support\Facades\Hash;
class ProductController extends Controller
{

public $products = [ 
    [ 
        'id' => 1, 
        'price' => '12300', 
        'title' => 'Intel i5 12th Gen', 
        'image' => 'HP16D0195NF.jpg', 
        'description' => 'Laptop polyvalent conçu pour la bureautique et 
multimédia.' 
    ], 
    [ 
        'id' => 2, 
        'price' => '14500', 
        'title' => 'Intel i3 11th Gen', 
        'image' => 'HP14424U3EA.jpg', 
        'description' => 'Portable léger adapté aux tâches quotidiennes.' 
    ], 
    [ 
        'id' => 3, 
        'price' => '16200', 
        'title' => 'Ryzen 5 4600H', 
        'image' => 'HUA6901443442959.jpg', 
        'description' => 'Bonne performance pour bureautique + montage 
léger.' 
    ], 
    [ 
        'id' => 4, 
        'price' => '10000', 
        'title' => 'Intel i7 10th Gen', 
        'image' => 'NXATHEF002.jpg', 
        'description' => 'Portable professionnel avec écran Full HD.' 
    ], 
];
    public function index(){

    return view('products.index', ['products' => $this->products]);
    
    }
    public function show($id){
        
        return view('products.show', ['id' => $id, 'products' => $this->products]);
        
        
    }

    public function create(){

        return view('products.ajouter');
    }


    public function store(Request $request){

        $request->validate([
            'title' => 'required|min:5',
            'price' => 'required|min:0',
            'desc' => 'required|min:5'
        ], [
            'title.required' => 'le titre est obligatoire',
            'price.required' => 'le prix est obligatoire',
            'desc.required' => 'la description est obligatoire',
        ]);


        return redirect()->back()->with("success", "Le produit à été bien ajouté");
    }

    public function add(){
        return view('etudiant.add');
    }

    public function storeEtudiant(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'pass' => 'required|min:6',
            'confirme' => 'required|same:pass',
            'bac' => 'required',
            'filiere' => 'required'
        ]);

        return redirect()->back()->with('valide', "l'étudiant a été bien ajouté");
    }
    
    public function creerCompte(){
        return view('compte.compte');
        }
        
        public function storeCompte(Request $request){
            $request->validate([
                'login' => 'required|unique:comptes,login',
                'pass' => 'required|min:6',
                'confirme' => 'required|same:pass',
                
            ]);

            $user = new Compte();
                $user->login = $request->input('login');
                $user->password = Hash::make( $request->input('pass'));
                $user->save();
    
            return redirect()->back()->with('valide', "le compte a été bien creer");
        }




    


}