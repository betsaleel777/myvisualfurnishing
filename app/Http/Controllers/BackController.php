<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\Session ;

class BackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $grand_titre = 'Tableau de bord';
        return view('office.index', compact('grand_titre'));
    }

    public function deconnect()
    {
        Auth::logout();
        Session::flush();
        $message = 'Vous avez été correctement déconnecter de babideco-office';
        return redirect()->route('login')->with('success', $message);
    }
}
