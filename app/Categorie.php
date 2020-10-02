<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $_fillable = ['nom', 'image'];
    public const RULES = ['nom' => 'required|max:70',
        'image' => 'mimes:jpeg,jpg,png|dimensions:width=518,height=412',
    ];

    public function enfants()
    {
        return $this->hasMany(Scategorie::class, 'categorie');
    }
}
