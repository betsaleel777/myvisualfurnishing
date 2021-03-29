<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $grand_titre = 'Catégories';
        $categories = Categorie::get();
        return view('office.categories.index', compact('categories', 'grand_titre'));
    }

    public function add()
    {
        $grand_titre = 'Ajouter une catégorie';
        return view('office.categories.add', compact('grand_titre'));
    }

    public function store(Request $request)
    {
        $request->validate(Categorie::RULES);
        $categorie = new Categorie();
        $categorie->nom = $request->nom;
        if ($request->hasFile('image')) {
            $path = Storage::putFile('public/categories', $request->file('image'));
            $categorie->image = Str::substr($path, 7);
        }
        $categorie->save();
        $message = 'la categorie ' . $request->nom . 'a été enregistré avec succès';
        return redirect()->route('categories')->with('success', $message);
    }

    public function edit(int $id)
    {
        $categorie = Categorie::findOrFail($id);
        $grand_titre = 'Modifier ' . $categorie->nom;
        return view('office.categories.edit', compact('grand_titre', 'categorie'));
    }

    public function update(Request $request)
    {
        $request->validate(Categorie::RULES);
        $categorie = Categorie::findOrFail($request->categorie);
        $categorie->nom = $request->nom;
        if ($request->hasFile('image')) {
            Storage::delete('public/' . $categorie->image);
            $path = Storage::putFile('public/categories', $request->file('image'));
            $categorie->image = Str::substr($path, 7);
        }
        $categorie->save();
        $message = 'les modifications ont été enregistrées avec succès';
        return redirect()->route('categories')->with('success', $message);
    }

    public function show(int $id)
    {
        $categorie = Categorie::findOrFail($id);
        $scategories = $categorie->enfants()->get();
        $grand_titre = $categorie->nom . ' catégories';
        return view('office.sous_categories.index', compact('scategories', 'grand_titre', 'categorie'));
    }

    public function delete(int $id)
    {
        $categorie = Categorie::findOrFail($id);
        if (!empty($categorie->image)) {
            Storage::delete('public/' . $categorie->image);
        }
        $categorie->delete();
        $message = 'la categorie ' . $categorie->nom . ' a été suprimée avec succès';
        return redirect()->route('categories')->with('success', $message);
    }

    //api

    public function liaisons(int $id)
    {
        //recupérer les sous_categories reliées à cette categorie si il en a envoyé un message d'avertissement
    }
}
