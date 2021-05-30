<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\voitureController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\clientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() {
    return view('indexAdmin');
   });

   Route::get('/Register', function() {
    return view('Register');
   });



/*Route::get('/indexAdmin', function() {
 return view('indexAdmin');
});*/

Route::get('/table_c', function() {
    return view('table_client');
   });

   Route::get('/addClient', function() {
    return view('addClient');
   });
   Route::get('/editCars', function() {
    return view('editCars');
   });

   Route::get('/clients', function(){
      return clientController::listeClients();
   })->name('/clients');

   
   Route::get('/Cars', function() {
    return voitureController::listeVoitures();
   });
   Route::get('/addCars', function() {
       //hna glt lih ghadi tst3mel wahd fonction li kayna fhad controller
       //had fonction katjib liya liste ta3 les markes o tsifthom bach n9der nkhtar mark mn li 3ndi f database
       //machi ayi wahd ybda ykhrbe9 f les marques o ydir li 3jbo
    return voitureController::listeMark();
   });
//    Route::get('/editCars', function() {
//     //hna glt lih ghadi tst3mel wahd fonction li kayna fhad controller
//     //had fonction katjib liya liste ta3 les markes o tsifthom bach n9der nkhtar mark mn li 3ndi f database
//     //machi ayi wahd ybda ykhrbe9 f les marques o ydir li 3jbo
//  return voitureController::listeMark();
// });
   Route::get('/table_c', function() {
    return clientController::listeClient();
   });
   Route::get('/Réservation', function() {
    return view('table_R');
   });
   Route::get('/addCom', function() {
    return view('addR');
   });
  
   Route::post('/addVoiture', 'voitureController@storeVoiture')->name('voiture.store');

   Route::post('storeVoiture', [voitureController::class, 'storeVoiture'])->name('storeVoiture');

   Route::post('register', [UserController::class, 'register'])->name('register');

   Route::post('login', [UserController::class, 'login'])->name('login');

   Route::post('/addClient', 'clientController@storeclient')->name('client.store');

   Route::post('storeclient', [clientController::class, 'storeclient'])->name('storeclient');
    Route::get('deleteVoiture/{id_v}',[voitureController::class, 'deleteVoiture']);

   // Clients Routes
   Route::get('/index_client', function() {
      return view('index_client');
     });
     Route::get('/Voiture', function() {
      return view('nos_voitures');
     });
     Route::get('/markes', function() {
      return view('nos_markes');
     });
  
  