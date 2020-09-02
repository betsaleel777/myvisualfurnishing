<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nom','image'] ;
    public const RULES = ['nom' => 'required|max:70',
                          'image' => 'max:255'
                         ] ;

    public function enfants(){
        return $this->hasMany(Scategorie::class,'categorie') ;
    }
}
