<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Location_Voiture</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="C:\xampp\htdocs\Location_Voiture\public\vendor\fontawesome-free\css\fontawesome.min.css">
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
        href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">
    
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <!-- <a class="navbar-brand" href="#!">Location <i class="fas fa-car"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                --><div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Accuill</a></li>
                        <li class="nav-item"><a class="nav-link active"  aria-current="page" href="#about">A PROPOS</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#contact">CONTACT</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Agence</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!"> Nos Voitures</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Nos Markes</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="col-4 form-inline navbar-search d-flex justify-content-between">
                        <div class="input-group  ">
                            <input type="text" class="form-control  border-1 border-dark"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append ">
                                <button class="btn btn-dark "type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                </form>
               
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                             Commande
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
       @yield('content')
        <!--  @yield('content1')
        @yield('content2')
        @yield('content3')
        @yield('content4') 
        @yield('content5')
        @yield('content6') -->
        </nav>
     
    
             
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="d-flex justify-content-evenly">
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="p-2 bd-highlight" id="about"><h2 class="m-0 text-center text-white">A PROPOS</h2><hr class="text-white">
                            <p class="m-0 text-center text-white">Service proposer par notre entreprise <br>
                                 offrant aux Clients la location des voitures pour gagner du temps.</p>
                        </div>
                   </div>
                    <div class="d-flex flex-row bd-highlight mb-3" id="contact">
                        <div class="p-2 bd-highlight"><h2 class="m-0 text-center text-white">CONTACT</h2><hr class="text-white">
                            
                            <i class="fas fa-phone-square-alt"></i>
                        </div>
                    </div>
            </div>
     
            
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
