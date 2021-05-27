@extends('layouts.master')
@section('content4')
  
    <div class="container">
    <div class="mb-4">
                    <div class="row-cols-2 d-flex justify-content-between mb-4" >
                        <!-- Page Heading -->
                        <div class="col-8">
                            <a class="btn btn-primary" href="/Cars" role="button">List des voitures</a>
                        </div>
                    </div>
                </div>
                </div>
        
                        <hr class="sidebar-divider my-0">
                        <h2 class="text-dark h2 pl-4">Modiffier Voiture</h2>
                        <hr class="sidebar-divider my-0">
                    
                    <div class="container mt-4">
                        <form action="" method='post' class="container">
                        
                        <div class="row">
                                <div class="mt-2 col-md-6">
                                    <input required type="text" class="form-control"
                                placeholder="Matricule" 
                                aria-describedby="basic-addon2" name="matricule">
                                </div>
                            
                                <div class="mt-2 col-md-6">
                                    <select name="carburant">
                                        <option value="0">Essence</option>
                                        <option value="1">Diesel</option>
                                    </select>
                                </div>
                                
                                    <div class="mt-2 col-md-6">
                                            <input required type="date" class="form-control"
                                        placeholder="" 
                                        aria-describedby="basic-addon2"name="date_achat">
                                    </div>
                                    <div class="mt-2 col-md-6">
                                    <input required type="text" class="form-control"
                                placeholder="Modéle" 
                                aria-describedby="basic-addon2" name="model">
                                </div>
                                <div class="mt-2 col-md-6">
                                    <input required type="number" class="form-control"
                                placeholder="kms"  
                                aria-describedby="basic-addon2" name="kms">
                                </div> 
                                <div class="mt-2 col-md-6">
                                    <input required type="text" class="form-control"
                                placeholder="mark"  
                                aria-describedby="basic-addon2" name="mark">
                                </div> 
                                <div class="mt-2 col">
                                    <input required type="file" class="form-control"
                                
                                aria-describedby="basic-addon2" name="img">
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
                
                </div> 

@endsection