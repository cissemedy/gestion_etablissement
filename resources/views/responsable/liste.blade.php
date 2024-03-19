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
       <div class="col s12">
        <h1>Gestion établissement</h1>
        <hr>
        <a href="/ajouter" class="btn btn-dark">ajoute responsables</a>                            
        <hr>
        @if (session('status'))
          <div class="alert alert-success">
          {{session('status')}}
          </div>
        @endif
            <table class="table table-striped">
              <thead class="table-dark">
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
                        <a href="/ajouter-responsable/{id}" class="btn btn-primary me-md-2">Ajouter</a>
                        <a href="/update-responsable/{{$responsable->id}}" class="btn btn-warning"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
  <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.1 6.1 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.1 8.1 0 0 1-3.078.132 4 4 0 0 1-.562-.135 1.4 1.4 0 0 1-.466-.247.7.7 0 0 1-.204-.288.62.62 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896q.19.012.348.048c.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04M4.705 11.912a1.2 1.2 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.4 3.4 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3 3 0 0 0 .126-.75zm1.44.026c.12-.04.277-.1.458-.183a5.1 5.1 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005zm3.582-3.043.002.001h-.002z"/>
</svg>Modifier</a>
                        <a href="/delete-responsable/{{$responsable->id}}" class="btn btn-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
  <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z"/>
</svg>Supprimer</a>

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