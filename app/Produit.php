<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['nom', 'prix', 'prix_solde', 'main_image', 'shodai', 'nidaime', 'sandaime', 'marque', 'magasin', 'description', 'livrable', 'statut'];

    public const RULES = ['nom' => 'required',
        'prix' => 'required|numeric',
        'prix_solde' => 'nullable|numeric',
        'main_image' => 'required|mimes:jpeg,jpg,png|dimensions:max_width=900,max_height=900',
        'shodai' => 'required|mimes:jpeg,jpg,png|dimensions:max_width=900,max_height=900',
        'nidaime' => 'required|mimes:jpeg,jpg,png|dimensions:max_width=900,max_height=900',
        'sandaime' => 'nullable|mimes:jpeg,jpg,png|dimensions:max_width=900,max_height=900',
        'statut' => 'nullable|max:50',
    ];
}
