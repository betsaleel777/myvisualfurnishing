<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magasin extends Model
{
    public const RULES = [
        'nom' => 'required|max:70',
        'lieu' => 'required|max:170',
        'enseigne' => 'required',
        'user' => 'required'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'lieu', 'confiance', 'enseigne', 'user'];

    public function enseigne()
    {
        return $this->belongsTo(Enseigne::class, 'enseigne');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user');
    }
}
