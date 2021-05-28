@extends('layouts.master')
@section('content2')

  
<div class="container">
                <div class="mb-4">
                   <div class="row-cols-2 d-flex justify-content-between mb-4" >
                    <!-- Page Heading -->
                    <div class="col-8">
                        <a class="btn btn-primary" href="/clients" role="button">List des Clients</a>
                        <a class="ml-md-4 btn btn-primary" href="/addClient" role="button">Ajouter Client </a>
                    </div>
                    <div class="col-4 d-none">
                    </div>
                   
                 </div>
              </div>
    
                    <hr class="sidebar-divider my-0">
                    <h2 class="text-dark h2 pl-4">Ajouter Client</h2>
                    <hr class="sidebar-divider my-0">
                <div class="container mt-4">
                    <form action="{{route('storeclient')}}" method="post" class="container">
                       @csrf
                       <div class="row">
                            <div class="mt-2 col-md-6">
                                <input required type="text" class="form-control"
                            placeholder="Entrer Nom" 
                            aria-describedby="basic-addon2" name ="nom">
                            </div>
                            <div class="mt-2 col-md-6">
                                <input required type="text" class="form-control"
                            placeholder="Prénom" 
                            aria-describedby="basic-addon2" name ="prenom">
                            </div>
                            <div class="mt-2 col-md-6">
                                <input required type="text" class="form-control"
                              placeholder="CNI" 
                              aria-describedby="basic-addon2" name ="CNI">
                            </div>
                            
                                <div class="mt-2 col-md-6">
                                        <input required type="date" class="form-control"
                                    placeholder="" 
                                    aria-describedby="basic-addon2" name ="date_naissance">
                                </div>
                                <div class="mt-2 col-md-6">
                                <input required type="text" class="form-control"
                            placeholder="Entrer Téle" 
                            aria-describedby="basic-addon2" name ="tele">
                            </div>
                            <div class="mt-2 col-md-6">
                                <input required type="text" class="form-control"
                            placeholder="L'dresse" 
                            aria-describedby="basic-addon2" name ="adresse">
                            </div>
                            
                        
                            <div class="mt-2 col">
                                <input required type="text" class="form-control"
                            placeholder="Entrer le Numéro permis" 
                            aria-describedby="basic-addon2" name ="permis">
                            </div>
                            
                            <div class="mt-2 col-md-2">
                                <input required type="submit" class="btn btn-success form-control"
                            value="Inserer"
                            aria-describedby="basic-addon2">
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                </div>
                <!-- /.container-fluid -->
            </div>

@endsection