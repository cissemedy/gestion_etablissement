<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')Gestion Etablissement</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">



    <div id="wrapper">


        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">


            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

                <div class="sidebar-brand-text mx-3 ">Gestion Etablissement</div>
            </a>
            <form action="/ajouter/traitement" metod="POST">

            <hr class="sidebar-divider my-0">


            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <hr class="sidebar-divider">




            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/index') }}" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Acceuil</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="">


                    </div>
                </div>
            </li>




            <hr class="sidebar-divider">





             <li class="nav-item">
                <a class="nav-link collapsed" href="/professeur" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Professeurs</span>
                </a>

            </li>




            <li class="nav-item">
                <a class="nav-link collapsed" href="/apprenant" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user-graduate"></i>
                    <span>Apprenants</span>
                </a>

            </li>



            <li class="nav-item">
                <a class="nav-link" href="/responsable">
                    <i class="fas fa-marker"></i>
                    <span>Responsables</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/filliere">
                    <i class="fas fa-school"></i>
                    <span>Fillieres</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/niveau">
                    <i class="	fas fa-book-open"></i>
                    <span>Niveau d'etude</span></a>
            </li>


            <hr class="sidebar-divider d-none d-md-block">




            <div class="sidebar-card d-none d-lg-flex">
                {{-- <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="..."> --}}
                <p class="text-center mb-2"><strong>MANAGE AN ESTABLISHMENT
                    ON ITS DIFFERENT PLANS
                    (ADMINISTRATIVE,

                    </strong> EDUCATIONAL, FINANCIAL
                    AND/OR MATERIAL)</p>
                <a class="btn btn-success btn-sm" href="#">Bienvenue!</a>
            </div>

        </ul>

        </form>
        <div class="container mt-3">
            @yield('container')
        </div>



</body>

</html>
