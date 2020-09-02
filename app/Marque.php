<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    public const RULES = ['nom' => 'required|max:70',
        'logo' => 'max:255'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'logo'];
}
