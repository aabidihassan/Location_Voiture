@extends('layouts.master')
@section('content')

 <!-- Begin Page Content -->
 <div class="container">
                <div class="mb-4">
                   <div class="row-cols-2 d-flex justify-content-between mb-4" >
                    <!-- Page Heading -->
                    <div class="col-8">
                        <a class="btn btn-primary" href="Cars" role="button">Voitures <span class="badge badge-light badge-counter">11</span></a>
                        <a class="ml-md-4 btn btn-primary" href="/table_c" role="button">Clients <span class="badge badge-light badge-counter">20</span></a>
                        
                    </div>
                    <form class="col-4 form-inline navbar-search d-flex justify-content-between">
                            <div class="input-group  ">
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
                    <h2 class="text-dark h2 pl-4">Actuellement réservé </h2>
                    <hr class="sidebar-divider my-0">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable-" width="100%" cellspacing="0">
                             <!--  -->  <thead>
                                        <tr>
                                            <th>Matricule</th>
                                            <th>CNI_Client</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Adresse_Client</th>
                                            <th>Télé</th>

                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <tr>
                                        <td>2005</td>
                                            <td>Carbone 17</td>
                                            <td>B.samla</td>
                                            <td>Carbone 17</td>
                                            <td>B.samla</td>
                                            <td>Carbone 17</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>93</td>
                                            <td>PHP Ajax</td>
                                            <td>G.Elkafhi</td>
                                            <td>Gassai Hamza</td>
                                            <td>Carbone 17</td>
                                            <td>B.samla</td>
                                           
                                            
                                        </tr>
                                        <tr>
                                            <td>2005</td>
                                            <td>Carbone 17</td>
                                            <td>B.samla</td>
                                            <td>Carbone 17</td>
                                            <td>B.samla</td>
                                            <td>Carbone 17</td>
                                            
                                            
                                        </tr>
                                    </tbody>
                                </table>
                               
                            </div>
                            
                        </div>
                    
                </div>
 @endsection



