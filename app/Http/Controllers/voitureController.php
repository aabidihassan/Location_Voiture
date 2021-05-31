<?php

namespace App\Http\Controllers;


use App\Models\voiture;
use App\models\Marke;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class voitureController extends BaseController
{
    public function indexAdmin () {
        // $marques = Marque::all();
        // $modeles = Modele::all();
        // $voitures = Voiture::all();
        // return view('gestion.index.indexAdmin', ['voitures' => $voitures, 'marques' => $marques, 'modeles' => $modeles]);

    }
    //return all cars
    public function voituresAdmin () {

        // $voitures = Voiture::all();
        // return view('gestion.voitures', ['voitures' => $voitures]);

    }




    public function storeVoiture(Request $req){
        
         $v = new voiture;
         $v->id_v = 0;
         $v->matricule = $req->matricule;
         $v->date_achat = $req->date_achat;
         $v->kms = $req->kms;
         $v->carburant = $req->carburant;
         $v->model = $req->model;
         $v->img = $req->img;
         $v->id_mark = $req->marke;
         $v->save();

         $data = voiture::join('markes', 'markes.id_mark', '=', 'voitures.id_mark')->get();
 

     return view('table_car', ['liste'=>$data]);

 }

 public static function listeVoitures(){
    $data = voiture::join('markes', 'markes.id_mark', '=', 'voitures.id_mark')->get();
    return view('table_car', ['liste'=>$data]);
 }

 public static function listeMark(){
     //hna glt lih mn model Marke dir liya select all
     //dik resultat 7tha liya f variable $data bach nsiftha l page dyali
     $data = Marke::all();
     //hna dert lih return l view dyali o sift liha wahd liste ta3 les markes li dert lihom deja select
     //dik list li smiytha $data siftha l view o smitha list
     return view('addCars', ['list'=>$data]);
 }

 public function storeMarque(Request $request)
 {
     Marque::create([
         'libelle'=>$request->input('libelle')
     ]);

        return back(); // redirect('indexAdmin');
 }

 public function destroy($id)
 {
     voiture::table('cars')->delete($id);
     return redirect('/Cars');
 }

// ****************************************************************************
 public function storeModele()
 {
     $data=Input::all();
     $marque=Marque::where('libelle', $data['marque'])->first();
     $id=$marque->id;
     Modele::create([
         'libelle'=>$data['libelle'],
         'marque_id'=>(int)$id
     ]);
     return back();
 }

 public function showReservations()
 {
     $reservations = Reservation::all();
     return view("gestion.reservations", compact('reservations'));
 }

    public function showMarques()
    {
        $marques = Marque::all();
        return view("gestion.marques", compact('marques'));
    }

    
    public function deleteVoiture($id_v){
        $data =voiture::find($id_v);
        $data ->delete();
        return redirect('/Cars');
    }
    public function editVoiture($id_v){
        
        $data= voiture::find($id_v);
        return view('editCars',['data'=>$data]);
    }


    // public function deleteVoiture($matricule){
    //     Voiture::whereId($matricule)->delete();
    //     return back();
    // }
    
  

    public function confirmReservation($id){
        Reservation::whereId($id)->update(['confirmed' => 1 ]);
        return back();

    }

    public function deleteReservation($id){
        Reservation::whereId($id)->delete();
        return back();

    }
}
