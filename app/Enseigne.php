<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseigne extends Model
{
    public const RULES = ['nom' => 'required|max:70',
        'contact' => 'required|max:20',
        'email' => 'required|max:255',
        'site' => 'max:200',
        'siege' => 'required|max:200',
        'logo' => 'max:255'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'logo', 'contact', 'email', 'site', 'siege'];

    public function magasins()
    {
        return $this->hasMany(Magasin::class, 'enseigne');
    }
}
