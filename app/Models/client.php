<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;




class client extends Model
{
    
    public $timestamps = true;
    protected $fillable = [
        'id_c',
        'date_naissance',
        'nom',
        'prenom',
        'permis',
        'adresse',
        'CNI',
        'tele',
        'id_us'
    ];
    protected $primaryKey = 'id_clients';
}
