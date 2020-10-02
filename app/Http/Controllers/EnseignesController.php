<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Magasin;
use App\Enseigne;

class EnseignesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $grand_titre = 'Enseignes' ;
        $enseignes = Enseigne::get();
        return view('office.enseignes.index', compact('enseignes', 'grand_titre'));
    }

    public function add()
    {
        $grand_titre = 'Ajouter Enseigne' ;
        return view('office.enseignes.add', compact('grand_titre'));
    }

    public function store(Request $request)
    {
        //regles de validations
        $regle = ['password' => 'required|min:6|confirmed'] ;
        $regles = array_merge($regle, array_merge(Enseigne::RULES, Magasin::RULES));
        $request->validate($regles);
        //creation de l'enseigne
        $enseigne = new Enseigne($request->except('logo', 'lieu', 'nom_magasin'));
        if ($request->hasFile('logo')) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('web/images/enseignes'), $imageName);
            $enseigne->logo = $imageName;
        }
        $enseigne->save();
        //creation de l'utilisateur
        $user = new User();
        $user->name = $request->nom ;
        $user->email = $request->email ;
        $user->password = Hash::make($request->password);
        $user->save();
        //création du magasin
        $magasin = new Magasin($request->only('lieu', 'nom_magasin'));
        $magasin->enseigne = $enseigne->id ;
        $magasin->user = $user->id ;
        $magasin->save();
        $message = "l'enseigne $request->nom a été enregistrée avec succes." ;
        return redirect()->route('enseignes')->with('success', $message)->withInput($request->except('password'));
    }

    public function edit(int $id)
    {
        $enseigne = Enseigne::findOrFail($id);
        $grand_titre = 'Modifier '.$enseigne->nom ;
        return view('office.enseignes.edit', compact('grand_titre', 'enseigne'));
    }

    public function update(Request $request)
    {
        //je suis ici
        $enseigne = Enseigne::findOrFail($request->enseigne);
        $user = $enseigne->magasins()->get()->first()->user ;
        $request->validate(Enseigne::regles($user,$enseigne->id)) ;
        $enseigne->nom = $request->nom ;
        $enseigne->contact = $request->contact ;
        $enseigne->email = $request->email ;
        $enseigne->site = $request->site ;
        $enseigne->siege = $request->siege ;
        if ($request->hasFile('logo')) {
            $request->logo->delete(public_path('web/images/enseignes'), $request->logo);
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('web/images/enseignes'), $imageName);
            $enseigne->logo = $imageName;
        }
        $enseigne->save();
        $message = 'les modifications ont été enregistrées avec succès';
        return redirect()->route('enseignes')->with('success', $message);
    }

    public function delete(int $id)
    {
        $enseigne = Enseigne::findOrFail($id);
        if (!empty($enseigne->logo)) {
            File::delete('web/images/enseignes/' . $enseigne->logo);
        }
        $users = array_map(
            function ($enseigne) {
                return $enseigne['user'] ;
            }, $enseigne->magasins()->get()->all()
        );
        User::destroy($users);
        $enseigne->delete();
        $message = 'l\'enseigne ' . $enseigne->nom . ' a été suprimée avec succès';
        return redirect()->route('enseignes')->with('success', $message) ;
    }

    public function show(int $id)
    {
        $enseigne = Enseigne::findOrFail($id);
        $magasins = $enseigne->magasins()->get();
        $grand_titre = 'Détails enseigne '.$enseigne->nom ;
        return view('office.enseignes.show', compact('grand_titre', 'magasins', 'enseigne'));
    }
}
