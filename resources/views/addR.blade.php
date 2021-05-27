@extends('layouts.master')
@section('content6')
        <div class="container">
        <div class="mb-4">
                        <div class="row-cols-2 d-flex justify-content-between mb-4" >
                            <!-- Page Heading -->
                            <div class="col-8">
                                <a class="btn btn-primary" href="/Réservation" role="button">List des Réservation</a>
                                <a class="ml-md-4 btn btn-primary" href="/addCom" role="button">Ajouter R** </a>
                            </div>
                            
                        </div>
                    </div>
            
                            <hr class="sidebar-divider my-0">
                            <h2 class="text-dark h2 pl-4">Ajouter Commande</h2>
                            <hr class="sidebar-divider my-0">
                        <div class="container mt-4">
                            <form action="" class="container">
                            @csrf
                            <div class="row">
                                    <div class="mt-2 col-md-6">
                                        <input required type="date" class="form-control"
                                    placeholder="Début" 
                                    aria-describedby="basic-addon2" name ='debut'>
                                    </div>
                                    <div class="mt-2 col-md-6">
                                        <input required type="date" class="form-control"
                                    placeholder="Fin" 
                                    aria-describedby="basic-addon2" name='fin' >
                                    </div>
                                    <div class="mt-2 col-md-6">
                                        <input required type="nomber" class="form-control"
                                    placeholder="Prix" 
                                    aria-describedby="basic-addon2" name='prix'>
                                    </div>
                                        <div class="mt-2 col-md-6">
                                        <input required type="text" class="form-control"
                                    placeholder="Matricule" 
                                    aria-describedby="basic-addon2" name='matricule'>
                                    </div>
                                    <div class="mt-2 col-md-6">
                                        <input required type="file" class="form-control"
                                    placeholder="L'image" 
                                    aria-describedby="basic-addon2" name='img'>
                                    </div>
                                    
                                
                                    <div class="mt-2 col">
                                        <input required type="text" class="form-control"
                                    placeholder="CNI" 
                                    aria-describedby="basic-addon2" name ='CNI'>
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