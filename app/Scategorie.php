<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scategorie extends Model
{
    public const RULES = ['nom' => 'required|max:70', 'categorie' => 'required'];
    protected $table = 'sous_categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'categorie'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie');
    }
}
