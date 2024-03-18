<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Etablissement</title>
</head>
<body class="bg-primary">
    <div class="container">
        {{-- <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-light shadow-sm form-control me-2">
                    <div class="container-fluid d-flex">
                      <a class="navbar-brand bg-primary btn btn-primary shadow-sm text-white" href="#">Gestion d'établissement</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </div>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <a href="professeur" class="btn btn-outline-primary" type="submit">Search</a>
                        </form>
                      </div>
                    </div>
                  </nav>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-3">
                {{-- <div class="">
                    <div class="">
                        <h1 class="text-3xl block text-center font-semibold"><i class="fas fa-user"></i>Login</h1>
                        <hr class="mt-3">
                        <div class="mt-3">
                            <label for="username" class="block text-base mb-2">Username</label>
                            <input type="text" name="" id="username" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-grey-600" placeholder="Enter Username...">
                        </div>
                        <div class="mt-3">
                            <label for="password" class="block text-base mb-2">Password</label>
                            <input type="password" name="" id="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-grey-600" placeholder="Enter Password...">
                        </div>
                    </div>
                    <div class="mt-3 justify-between items-center">
                        <div>
                            <input type="checkbox" name="" id="">
                            <label>Remember Me</label>
                        </div>
                        <div>
                            <a href="#">Forget Password ?</a>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="border-2 bg-primary m-2 text-white"><i class="fas fa-sign-in-alt"></i> Login</button>
                    </div>
                </div> --}}
            </div>
            <div class="col-md-12">

                                @yield('content')

            </div>
        </div>
    </div>
</body>
</html>
