<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    public const RULES = ['nom' => 'required|max:70',
        'logo' => 'mimes:jpeg,jpg,png|dimensions:max_width=900,max_height=900'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'logo'];
}
