<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarquesController extends Controller
{
    public function index(){
        $grand_titre = 'Marques' ;
        return view('office.marques.index')->name() ;
    }
}
