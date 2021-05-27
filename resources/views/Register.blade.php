<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Location-Voiture</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Custom fonts for this template -->
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
        href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">
    </head>
    <body class="">
      
    
 <section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Register</h2>
                        <hr class="divider" />
                    </div>
       </div>
    <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
    <div class="col-lg-6">
    <form action="{{route('register')}}" method="POST">
        @csrf
        <label for="email"><b>Nom</b></label>
        <input class="form-control" type="text" placeholder="NOM" name="nom" id="nom" required>
        <label for="email"><b>Prénom</b></label>
        <input class="form-control" type="text" placeholder="Prénom" name="prenom" id="prenom" required>
        <label for="email"><b>CNI</b></label>
        <input  class="form-control" type="text" placeholder="CNI" name="CNI" id="CNI" required>
        <label for="email"><b>Date de naissance</b></label>
        <input class="form-control" type="date" placeholder="Date de naissance" name="date_naissance" id="date_naissance" required>
        <label for="tele"><b>tele</b></label>
        <input class="form-control" type="text" placeholder="tele" name="tele" id="tele" required>
        <label for="permis"><b>Permis</b></label>
        <input  class="form-control" type="text" placeholder="Permis" name="permis" id="permis" required>

        <label for="email"><b>Email</b></label>
        <input class="form-control" type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="psw"><b>Password</b></label>
        <input  class="form-control" type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input class="form-control" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <hr>
        <div class="d-grid"><button class="btn btn-primary btn-xl" type="submit" >inscrire</button></div>
        <div class="d-grid"><a class="btn btn-light btn-xl" href="/" >connecter!</a></div>

      </div>

      
      
      </div>
      </form>
    </div>
    </div>
    </section>
</body>