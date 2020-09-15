<?php

namespace App\Http\Controllers;

use App\Marque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MarquesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $grand_titre = 'Marques';
        $marques = Marque::get();
        return view('office.marques.index', compact('marques', 'grand_titre'));
    }

    public function add()
    {
        $grand_titre = 'Ajouter une marque';
        return view('office.marques.add', compact('grand_titre'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(Marque::RULES);
        $marque = new Marque();
        $marque->nom = $request->nom;
        if ($request->hasFile('logo')) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('web/images/marques'), $imageName);
            $marque->logo = $imageName;
        }
        $marque->save();
        $message = 'la marque ' . $request->nom . 'a été enregistré avec succès';
        return redirect()->route('marques')->with('success', $message);
    }

    public function edit(int $id)
    {
        $marque = Marque::findOrFail($id);
        $grand_titre = 'Modifier ' . $marque->nom;
        return view('office.marques.edit', compact('grand_titre', 'marque'));
    }

    public function update(Request $request)
    {
        $data = $request->validate(Marque::RULES);
        $marque = Marque::findOrFail($request->marque);
        $marque->nom = $request->nom;
        if ($request->hasFile('logo')) {
            $request->logo->delete(public_path('web/images/marques'), $request->logo);
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('web/images/marques'), $imageName);
            $marque->logo = $imageName;
        }
        $marque->save();
        $message = 'les modifications ont été enregistrées avec succès';
        return redirect()->route('marques')->with('success', $message);
    }

    public function delete(int $id)
    {
        $marque = Marque::findOrFail($id);
        if (!empty($marque->logo)) {
            File::delete('web/images/marques/' . $marque->logo);
        }
        $marque->delete() ;
        $message = 'la marque ' . $marque->nom . ' a été suprimée avec succès';
        return redirect()->route('marques')->with('success', $message);
    }

    //api

    public function liaisons(int $id)
    {
        //recupérer les produit relié à cette marque si il en a envoyé un message d'avertissement
    }
}
