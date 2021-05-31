<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class voiture extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'id_v',
        'matricule',
        'date_achat',
        'kms',
        'carburant',
        'model',
        'img',
        'id_mark'
    ];
    protected $primaryKey = 'id_v';
}
