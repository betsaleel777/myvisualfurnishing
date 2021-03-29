<?php

namespace App\Http\Controllers;

use App\Magasin;
use App\Marque;
use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProduitsController extends Controller
{
    public function index()
    {
        $produits = Produit::with('magasinLinked', 'marqueLinked')->get();
        $grand_titre = 'Produits';
        return view('office.produits.index', compact('grand_titre', 'produits'));
    }

    public function add()
    {
        $magasins = Magasin::get()->pluck('nom_magasin', 'id')->all();
        $marques = Marque::get()->pluck('nom', 'id')->all();
        $grand_titre = 'Ajouter Produit';
        return view('office.produits.add', compact('grand_titre', 'marques', 'magasins'));
    }

    public function store(Request $request)
    {
        //dd($request->all()) ;
        $request->validate(Produit::RULES);
        $produit = new Produit($request->except('main_image', 'shodai', 'nidaime', 'sandaime'));
        // dd($produit);
        if ($request->hasFile('main_image')) {
            $path = Storage::putFile('public/produits', $request->file('main_image'));
            $produit->main_image = Str::substr($path, 7);
        }
        if ($request->hasFile('shodai')) {
            $path = Storage::putFile('public/produits', $request->file('shodai'));
            $produit->shodai = Str::substr($path, 7);
        }
        if ($request->hasFile('nidaime')) {
            $path = Storage::putFile('public/produits', $request->file('nidaime'));
            $produit->nidaime = Str::substr($path, 7);
        }
        if ($request->hasFile('sandaime')) {
            $path = Storage::putFile('public/produits', $request->file('sandaime'));
            $produit->sandaime = Str::substr($path, 7);
        }
        if ($request->livrable === 'on') {
            $produit->livrable = true;
        }
        $produit->save();
        $message = "le produit $request->nom a été crée avec succès !";
        return redirect()->route('produits')->with('success', $message)->withErrors($request->all());
    }

    public function edit(int $id)
    {
        $produit = Produit::with('magasinLinked', 'marqueLinked')->find($id);
        $magasins = Magasin::get()->pluck('nom_magasin', 'id')->all();
        $marques = Marque::get()->pluck('nom', 'id')->all();
        $grand_titre = 'Modifier ' . $produit->nom;
        return view('office.produits.edit', compact('grand_titre', 'produit', 'marques', 'magasins'));
    }

    public function update(Request $request)
    {
        $produit = Produit::find($request->produit);
        $request->validate(Produit::EDIT_RULES);
        $produit->nom = $request->nom;
        $produit->prix = $request->prix;
        $produit->prix_solde = $request->prix_solde;
        $produit->marque = $request->marque;
        $produit->magasin = $request->magasin;
        $produit->description = $request->description;
        $produit->livrable = $request->livrable;

        //modification des images
        if ($request->hasFile('main_image')) {
            Storage::delete('public/' . $produit->main_image);
            $path = Storage::putFile('public/produits', $request->file('main_image'));
            $produit->main_image = Str::substr($path, 7);
        }
        if ($request->hasFile('shodai')) {
            Storage::delete('public/' . $produit->shodai);
            $path = Storage::putFile('public/produits', $request->file('shodai'));
            $produit->shodai = Str::substr($path, 7);
        }
        if ($request->hasFile('nidaime')) {
            Storage::delete('public/' . $produit->nidaime);
            $path = Storage::putFile('public/produits', $request->file('nidaime'));
            $produit->nidaime = Str::substr($path, 7);
        }
        if ($request->hasFile('sandaime')) {
            Storage::delete('public/' . $produit->sandaime);
            $path = Storage::putFile('public/produits', $request->file('sandaime'));
            $produit->sandaime = Str::substr($path, 7);
        }
        if ($request->livrable === 'on') {
            $produit->livrable = true;
        }
        $produit->save();
        $message = "Produit modifié avec succès";
        return redirect()->route('produits')->with('success', $message)->withErrors($request->all());
    }

    public function show(int $id)
    {
        $produit = Produit::with('magasinLinked', 'marqueLinked')->find($id);
        $grand_titre = 'Détails ' . $produit->nom;
        return view('office.produits.show', compact('produit', 'grand_titre'));
    }

    public function delete(int $id)
    {

    }
}
