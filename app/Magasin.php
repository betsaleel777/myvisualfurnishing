<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magasin extends Model
{
    public const RULES = [
        'nom_magasin' => 'required|max:70',
        'lieu' => 'required|max:170',
    ];

    public const OTHER_RULES = [
        'nom_magasin' => 'required|max:70',
        'lieu' => 'required|max:170',
        'password' => 'required|min:6|confirmed',
        'email' => 'required|email|max:200|unique:users,email',
    ];

    public static function regles(int $user)
    {
        return [
            'nom_magasin' => 'required|max:70',
            'lieu' => 'required|max:170',
            'old_password' => 'nullable|min:6',
            'password' => 'nullable|min:6|confirmed',
            'email' => 'required|email|max:200|unique:users,email,' . $user,
        ];
    }

    public static function autres_regles(int $user)
    {
        return [
            'nom_magasin' => 'required|max:70',
            'lieu' => 'required|max:170',
            'password' => 'required|min:6|confirmed',
            'email' => 'required|email|max:200|unique:users,email,' . $user,
        ];

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nom_magasin', 'lieu', 'confiance', 'enseigne', 'user'];

    public function enseigne()
    {
        return $this->belongsTo(Enseigne::class, 'enseigne');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user');
    }
}
