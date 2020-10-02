<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseigne extends Model
{
    public const RULES = ['nom' => 'required|max:70',
        'contact' => 'required|max:20|unique:enseignes,contact',
        'email' => 'required|email|max:200|unique:users,email',
        'site' => 'max:200',
        'siege' => 'required|max:200',
        'logo' => 'mimes:jpeg,jpg,png|dimensions:width=900,height=900'
    ];

    public static function regles(int $user,int $enseigne)
    {
        //comment faire si il y a plusieurs users
        return ['nom' => 'required|max:70',
          'contact' => 'required|max:20|unique:enseignes,contact,'.$enseigne,
          'email' => 'required|email|max:200|unique:users,email,'.$user,
          'site' => 'max:200',
          'siege' => 'required|max:200',
          'logo' => 'mimes:jpeg,jpg,png|dimensions:width=900,height=900'
        ] ;
    }
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
