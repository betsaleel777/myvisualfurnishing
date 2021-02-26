<?php

namespace App\Http\Controllers;

use App\Magasin;
use App\Marque;
use App\Produit;
use Illuminate\Http\Request;

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
            $imageName = 'main'.time() . '.' . $request->main_image->extension();
            $request->main_image->move(public_path('web/images/produits'), $imageName);
            $produit->main_image = $imageName;
        }
        if ($request->hasFile('shodai')) {
            $imageName = 'shod'.time() . '.' . $request->shodai->extension();
            $request->shodai->move(public_path('web/images/produits'), $imageName);
            $produit->shodai = $imageName;
        }
        if ($request->hasFile('nidaime')) {
            $imageName = 'nida'.time() . '.' . $request->nidaime->extension();
            $request->nidaime->move(public_path('web/images/produits'), $imageName);
            $produit->nidaime = $imageName;
        }
        if ($request->hasFile('sandaime')) {
            $imageName = 'sand'.time() . '.' . $request->sandaime->extension();
            $request->sandaime->move(public_path('web/images/produits'), $imageName);
            $produit->sandaime = $imageName;
        }
        if($request->livrable === 'on') {
            $produit->livrable = true ;
        }
        $produit->save();
        $message = "le produit $request->nom a été crée avec succès !";
        return redirect()->route('produits')->with('success', $message)->withErrors($request->all());
    }

    public function edit(int $id)
    {
        $produit = Produit::with('magasinLinked','marqueLinked')->find($id) ;
        $magasins = Magasin::get()->pluck('nom_magasin', 'id')->all();
        $marques = Marque::get()->pluck('nom', 'id')->all();
        $grand_titre = 'Modifier '.$produit->nom ;
        return view('office.produits.edit', compact('grand_titre', 'produit','marques','magasins'));
    }

    public function update(Request $request)
    {
        $produit = Produit::find($request->produit);
        $request->validate(Produit::EDIT_RULES);
        $produit->nom = $request->nom ;
        $produit->prix = $request->prix ;
        $produit->prix_solde = $request->prix_solde ;
        $produit->marque = $request->marque ;
        $produit->magasin = $request->magasin ;
        $produit->description = $request->description ;
        $produit->livrable = $request->livrable ;

        //modification des images
        if ($request->hasFile('main_image')) {
            $request->main_image->delete(public_path('web/images/produits'), $request->main_image);
            $imageName = time() . '.' . $request->main_image->extension();
            $request->main_image->move(public_path('web/images/produits'), $imageName);
            $produit->main_image = $imageName;
        }
        if ($request->hasFile('shodai')) {
            $request->shodai->delete(public_path('web/images/produits'), $request->shodai);
            $imageName = time() . '.' . $request->shodai->extension();
            $request->shodai->move(public_path('web/images/produits'), $imageName);
            $produit->shodai = $imageName;
        }
        if ($request->hasFile('nidaime')) {
            $request->nidaime->delete(public_path('web/images/produits'), $request->nidaime);
            $imageName = time() . '.' . $request->nidaime->extension();
            $request->nidaime->move(public_path('web/images/produits'), $imageName);
            $produit->nidaime = $imageName;
        }
        if ($request->hasFile('sandaime')) {
            $request->sandaime->delete(public_path('web/images/produits'), $request->sandaime);
            $imageName = time() . '.' . $request->sandaime->extension();
            $request->sandaime->move(public_path('web/images/produits'), $imageName);
            $produit->sandaime = $imageName;
        }
        $produit->save() ;
        $message = "Produit modifié avec succès";
        return redirect()->route('produits')->with('success',$message)->withErrors($request->all()) ;
    }

    function show(int $id)
    {
        $produit = Produit::with('magasinLinked', 'marqueLinked')->find($id);
        $grand_titre = 'Détails '.$produit->nom ;
        return view('office.produits.show',compact('produit','grand_titre')) ;
    }

    public function delete(int $id)
    {

    }
}
