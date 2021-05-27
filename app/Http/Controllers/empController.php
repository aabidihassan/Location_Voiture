<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\emp;
use Illuminate\Routing\Controller as BaseController;


class emp extends BaseController
{
    public  function storeemp(Request $req){
        $c = new emp; 
        $c->debut = $req->nom;
        $c->fin = $req->prenom;
        $c->prix = $req->email;
        $c->matricule = $req->psw;
        $c->CNI = $req->CNI;
        $c->date_naissance = $req->date_naissance;
        $c->tele = $req->tele;
        $c->permis = $req->permis;
        $c->save();

        //return view('');
        //hahiya mli tdiriha ktbi smiyt view hna 
  }
  public  function auth(){
        
  }  
}
