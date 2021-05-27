<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_u',
        'nom',
        'prenom' ,
        'email', 
        'mot_de_passe',
        'CNI',
        'date_naissance',
        'tele',
        'permis'
    ];

}