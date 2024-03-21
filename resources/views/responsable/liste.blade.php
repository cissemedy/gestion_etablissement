<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud laravel 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

  @extends('layout')
  @section('title')
  @section('container')
    <div class="container text-center">

      <div class="row">
       <div class="card m-2">
        <h1 class="card-header">Gestion établissement</h1><br>
        <hr>
        <a href="/ajout" class="btn btn-primary  mb-3">ajoute responsables
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
        </svg>
        </a>                            
        <hr>
        @if (session('status'))
          <div class="alert alert-success">
          {{session('status')}}
          </div>
        @endif
            <table class="table table-striped">
              <thead class="table-light">
                <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>E_mail</th>
                <th>Numero</th>
                <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @php
                 $ide = 1;
                @endphp
                @foreach($responsables as $responsable)
                  <tr>
                      <td>{{ $ide }}</td>
                      <td>{{$responsable->nom}}</td>
                      <td>{{$responsable->prenom}}</td>
                      <td>{{$responsable->adresse}}</td>
                      <td>{{$responsable->E_mail}}</td>
                      <td>{{$responsable->numero}}</td>

                        <td>
                        <a href="/detail-responsable/{{ $responsable->id }}" class="btn btn-success btn-sm">
        <i class="fas fa-eye text-white" aria-hidden="true"></i>
      </a>
      <a href="/updat-responsable/{{ $responsable->id }}" class="btn btn-info btn-sm">
        <i class="fas fa-edit text-white" ></i>
        </a>
          
       

        
      
                        

                      </td>                   
                  </tr>
                  @php
                  $ide += 1;
                  @endphp
                @endforeach
              </tbody>
            </table>
            {{$responsables->links()}}

        
  </div>
</div>
@endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>