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
        $magasins = Magasin::get();
        $marques = Marque::get();
        $prouits = Produit::get();
        $grand_titre = 'Produits';
        return view('office.produits.index', compact('grand_titre', 'magasins', 'marques', 'produits'));
    }

    public function add()
    {

    }

    public function store()
    {

    }

    public function edit(int $id)
    {

    }

    public function update(Request $request)
    {

    }

    public function delete(int $id)
    {

    }
}
