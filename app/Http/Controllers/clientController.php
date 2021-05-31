<?php

namespace App\Http\Controllers;
use App\Models\client;
use App\models\User;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index(){}
    //


public function storeclient(Request $req){
        
    $v = new client;
    $v->id_clients = 0;
    $v->id_u = 0;
    $v->nom = $req->nom;
    $v->date_naissance = $req->date_naissance;
    $v->prenom = $req->prenom;
    $v->CNI = $req->CNI;
    $v->tele = $req->tele;
    $v->permis = $req->permis;
    $v->adresse = $req->adresse;
    $v->save();

    $data = client::join('users', 'users.id_u', '=', 'clients.id_u')->get();


return view('table_client', ['liste'=>$data]);

}

public static function listeClients(){
    $data = client::all();
    return view('table_client', ['liste'=>$data]);
}

public static function listeClient(){
 $data = client::join('users', 'users.id_u', '=', 'clients.id_u')->get();
 
return view('table_client', ['liste'=>$data]);
}
public function deleteClient($id_clients){
    $data =client::find($id_clients);
    $data ->delete();
    return redirect('/clients');
}
}