@extends('layouts.master')
@section('content5')
  <!-- Begin Page Content -->
<div class="container">
                <div class="mb-4">
                   <div class="row-cols-2 d-flex justify-content-between mb-4" >
                    <!-- Page Heading -->
                    <div class="col-8">
                        <a class="btn btn-primary" href="/Réservation" role="button">List des Réservation</a>
                        <a class="ml-md-4 btn btn-primary" href="/addCom" role="button">Ajouter R** </a>
                    </div>
                    <form class="col-4 form-inline navbar-search d-flex justify-content-between">

                            <div class="col input-group  ">
                                <input type="text" class="form-control  border-1 border-primary"
                                    placeholder=" Matricule" aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append ">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                    </form>
                   
                 </div>
              </div>
                    <!-- DataTales Example -->
                <div class="card- shadow- mb-4">
                    <hr class="sidebar-divider my-0">
                    <h2 class="text-dark h2 pl-4">List des Réservation</h2>
                    <hr class="sidebar-divider my-0">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image_voiture</th>
                                            <th>Matricule</th>
                                            <th>CNI</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Adresse</th>
                                            <th>Télé</th>
                                            <th  class="d-flex justify-content-center">Etat</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <tr>
                                           <td>****</td>
                                            <td>***</td>
                                            <td>**</td>
                                            <td>**</td>
                                            <td>**</td>
                                            <td>**</td>
                                            <td>***</td>
                                            <td class="d-flex justify-content-center">
                                            <a class="btn btn-danger"  class="btn mr-3" href="#">Supprimer <i class="far fa-trash-alt"></i> </a>
                                            <a class="btn btn-success" class="btn mr-3" href="#">Modiffier<i class="fas fa-user-edit"></i> </a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                               
                            </div>
                            
                        </div>
                       
                    
                
                  
            </div> 
@endsection