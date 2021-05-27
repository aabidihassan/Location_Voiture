@extends('layouts.master')

@section('content1')
 <!-- Begin Page Content -->
 <div class="container">
                <div class="mb-4">
                   <div class="list-cols-2 d-flex justify-content-between mb-4" >
                    <!-- Page Heading -->
                    <div class="col-8">
                        <a class="btn btn-primary" href="/table" role="button">List des Clients</a>
                        <a class="ml-md-4 btn btn-primary" href="/addClient" role="button">Ajouter Clients </a>
                    </div>
                    <form class="col-4 form-inline navbar-search d-flex justify-content-between">

                            <div class=" dropdown mr-1">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                    select
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <a class="dropdown-item" href="#">CNI</a>
                                    <a class="dropdown-item" href="#">NOM</a>
                                </div>
                            </div>
                            <div class="col input-group  ">
                                <input type="text" class="form-control  border-1 border-primary"
                                    placeholder="Search for..." aria-label="Search"
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
                    <h2 class="text-dark h2 pl-4">List des Clients</h2>
                    <hr class="sidebar-divider my-0">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NOM</th>
                                            <th>Prénom</th>
                                            <th>CNI</th>
                                            <th>Adresse</th>
                                            <th>Télé</th>
                                            <th>Pérmis</th>
                                            <th  class="d-flex justify-content-center">Etat</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                
                                        @foreach($liste as $list)
                                           <tr>
                                           <td>{{$list['nom']}}</td>
                                            <td>{{$list['prenom']}}</td>
                                            <td>{{$list['adresse']}}</td>
                                            <td> {{$list['tele']}} </td>
                                            <td>{{$list['permis']}}</td>
                                           </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                               
                            </div>
                            
                        </div>
                       
                    
                
                  
            </div> 
            @endsection