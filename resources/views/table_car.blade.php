@extends('layouts.master')
@section('content3')

<!-- Begin Page Content -->
<div class="container">
                <div class="mb-4">
                   <div class="row-cols-2 d-flex justify-content-between mb-4" >
                    <!-- Page Heading -->
                    <div class="col-8">
                        <a class="btn btn-primary" href="/Cars" role="button">List des voitures</a>
                        <a class="ml-md-4 btn btn-primary" href="/addCars" role="button">Ajouter voiture </a>
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
                    <h2 class="text-dark h2 pl-4">List des Voiture</h2>
                    <hr class="sidebar-divider my-0">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image_voiture</th>
                                            <th>Matricule</th>
                                            <th>Date d'achat</th>
                                            <th>Carburant</th>
                                            <th>Modéle</th>
                                            <th>Mark</th>
                                            <th  class="">Etat</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        @foreach($liste as $row)
                                           <tr>
                                           <td>{{$row['img']}}</td>
                                            <td>{{$row['matricule']}}</td>
                                            <td>{{$row['date_achat']}}</td>
                                            <td>
                                                @if($row['carburant']==0) Essence
                                                @else Diesel
                                                @endif
                                            </td>
                                            <td>{{$row['model']}}</td>
                                            <td>{{$row['nom_marke']}}</td>
                                           
                                            </td>
                                           </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                               
                            </div>
                            
                        </div>
                       
                    
                
                  
            </div> 

@endsection