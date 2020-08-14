<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $grand_titre = 'Myvirtualfurnishing Acceuil' ;
        return view('site.site',compact('grand_titre')) ;
    }

    public function single(){
        $grand_titre = 'Produit Concerné' ;
        return view('site.produits.shop-single',compact('grand_titre')) ;
    }
}
