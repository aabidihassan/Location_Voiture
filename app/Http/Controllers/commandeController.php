<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\commande;
use Illuminate\Routing\Controller as BaseController;


class commande extends BaseController
{
    public  function storecommande(Request $req){
        $c = new commande;
        $c->id_u=0;
        $c->nom = $req->nom;
        $c->prenom = $req->prenom;
        $c->email = $req->email;
        $c->mot_de_passe = $req->psw;
        $c->CNI = $req->CNI;
        $c->date_naissance = $req->date_naissance;
        $c->tele = $req->tele;
        $c->permis = $req->permis;
        $c->save();

        //return view('');
        //hahiya mli tdiriha ktbi smiyt view hna 
  }

  public static function login(Request $req){
    $dt = c::where('email', $req->email)
    ->where('mot_de_passe', $req->pass)
    ->first();
    if($dt==null) return view('welcome') ;
    else echo "done";
    
  }

  public  function auth(){
        
  }  
}
