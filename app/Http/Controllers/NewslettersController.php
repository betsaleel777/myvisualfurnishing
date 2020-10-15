<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;

class NewslettersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(Newsletter::RULE);
        Newsletter::create($request->all());
        return response()->json(['message' => "Vous êtes désormais enregistré dans nos newsletters"]);
    }
}
