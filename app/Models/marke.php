<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class marke extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'id_mark',
        'nom_marke'
    ];
}
