<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Scategorie;
use Illuminate\Http\Request;

class ScategoriesController extends Controller
{
    public function index(){
        $grand_titre = 'Sous Catégories' ;
        $scategories = Scategorie::with('categorie')->get() ;
        return view('office.sous_categories.index', compact('grand_titre','scategories')) ;
    }

    public function add(int $categorie){
       $grand_titre = 'Ajouter Sous Catégorie' ;
       $id = $categorie ;
       $categorie_parent = Categorie::findOrFail($categorie) ;
       return view('office.sous_categories.add',compact('grand_titre','id','categorie_parent')) ;
    }

    public function store(Request $request){
       $request->validate(Scategorie::RULES) ;
       $categorie = Categorie::findOrFail($request->categorie) ;
       Scategorie::create($request->all()) ;
       $message = "la sous catégorie $request->nom a été crée avec succès!" ;
       return redirect()->route('categories')->with('success', $message) ;
    }

    public function edit(int $id,int $categorie){
        $scategorie = Scategorie::findOrFail($id) ;
        $categorie_parent = Categorie::findOrFail($categorie) ;
        $grand_titre = 'Modifier '.$scategorie->nom ;
        return view('office.sous_categories.edit',compact('grand_titre','scategorie','categorie_parent')) ;
    }

    public function update(Request $request){
      $scategorie = Scategorie::findOrFail($request->scategorie) ;
      $scategorie->nom = $request->nom ;
      $scategorie->save() ;
      $message = 'modification de la catégorie '.$scategorie->nom.' éffectuée avec succès!' ;
      return redirect()->route('categories')->with('success', $message) ;
    }

    public function delete(int $id){
      $scategorie = Scategorie::findOrFail($id) ;
      $message = 'modification de la catégorie '.$scategorie->nom.' éffectuée avec succès!' ;
      $scategorie->delete() ;
      return redirect()->route('categories')->with('success',$message) ;
    }
}
