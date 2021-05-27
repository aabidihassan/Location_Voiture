<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
  public static function register(Request $req){
          $user = new User;
          $user->id_u=0;
          $user->nom = $req->nom;
          $user->prenom = $req->prenom;
          $user->email = $req->email;
          $user->mot_de_passe = $req->psw;
          $user->CNI = $req->CNI;
          $user->date_naissance = $req->date_naissance;
          $user->tele = $req->tele;
          $user->permis = $req->permis;
          $user->save();

          //return view('');
          //hahiya mli tdiriha ktbi smiyt view hna 
    }

    public static function login(Request $req){
      $dt = User::where('email', $req->email)
      ->where('mot_de_passe', $req->pass)
      ->first();
      if($dt==null) return view('welcome') ;
      else echo "done";
      
    }

    public  function auth(){
          
    }  
}
