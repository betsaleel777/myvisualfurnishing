<?php

namespace App\Http\Controllers;

use App\Enseigne;
use App\Magasin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MagasinsController extends Controller
{
    public function add(int $id)
    {
        $grand_titre = 'AJOUTER MAGASIN';
        $enseigne = Enseigne::findOrFail($id);
        return view('office.magasins.add', compact('grand_titre', 'enseigne'));
    }

    public function store(Request $request)
    {
        $request->validate(Magasin::OTHER_RULES);
        $user = new User($request->only('email'));
        $user->name = $request->nom_magasin;
        $user->password = Hash::make($request->password);
        $user->save();
        $magasin = new Magasin($request->except('password', 'email', 'password_confirmation'));
        $magasin->user = $user->id;
        $magasin->save();
        $message = "le magasin $magasin->nom_magasin a été crée avec succès!";
        return redirect()->route('enseigne_show', $request->enseigne)->with('success', $message)->withInput($request->except('password'));
    }

    public function edit(int $id)
    {
        $magasin = Magasin::with('enseigne')->findOrFail($id);
        $enseigne = $magasin->enseigne()->get()->first();
        $email = User::findOrFail($magasin->user)->email;
        $grand_titre = "MODIFIER $magasin->nom_magasin";
        return view('office.magasins.edit', compact('magasin', 'enseigne', 'grand_titre', 'email'));
    }

    public function update(Request $request)
    {
        $magasin = Magasin::with('enseigne')->findOrFail($request->magasin);
        $enseigne = $magasin->enseigne;
        $user_id = $magasin->user;
        $user = User::findOrFail($user_id);
        $request->validate(Magasin::regles($user_id));
        //modification de l'utilisateur du magasin
        if (!empty($request->old_password)) {
            $request->validate(Magasin::autres_regles($user_id));
            if (Hash::check($request->old_password, $user->password)) {
                $user->password = Hash::make($request->password);
            } else {
                $message = 'le mot de passe est incorrecte';
                return redirect()->back()->with('danger', $message);
            }
        }
        //modification du magasin
        $user->email = $request->email;
        $user->name = $request->nom_magasin;
        $user->save();
        $magasin->nom_magasin = $request->nom_magasin;
        $magasin->lieu = $request->lieu;
        $magasin->save();
        $message = 'modification a été effectuée avec success';
        return redirect()->route('enseigne_show', $enseigne)->with('success', $message);
    }

    public function delete(int $id)
    {
        //si le magasin est unique empêcher suppression
        //si magasin a des produits publiés demander confirmation
        //supprimer magasins avec tout ce qui y est lié
    }

    public function liaisons(int $id)
    {
        //verifier si il n'y a pas de produits lié
    }
}
