
  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ajout Etudiant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  
  
 
  
@extends('layout')
  @section('title')
  @section('container')
<div class="container text-center">
 
  <div class="row">
    <div class="card m-2">
   
      <h1 class="card-header">La liste des Apprenants</h1><br>
      <hr>
      <a href="/ajouter" class="btn btn-info  mb-3">
        Ajouter un(e) apprenant(e)
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
        </svg>
      </a>
        @if (session('status'))
          <div class="alert bg-success text-white">
            {{ session('status') }}
          </div>
        @endif

        <table class="table table-striped  table-bordered">
          <thead class="table-light">
            <tr>
              <th>Matricule</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Email</th>
              <th>Date Naissance</th>
              <th>Adresse</th>
              <th>Universite</th>
              <th>Actions</th>
              
            </tr>
          </thead>
          
          @php
            $ide = 1;
          @endphp


          @foreach($apprenants as $apprenant)

    <tr>
      <td>{{ $ide }}</td>
      <td>{{ $apprenant->nom }}</td>
      <td>{{ $apprenant->prenom }}</td>
      <td>{{ $apprenant->email }}</td>
      <td>{{ $apprenant->date_naissance }}</td>
      <td>{{ $apprenant->adresse }}</td>
      <td>{{ $apprenant->universite_id }}</td>
      <td>
        <a href="/detail-apprenant/{{ $apprenant->id }}" class="btn btn-success btn-sm">
        <i class="fas fa-eye text-white" aria-hidden="true"></i>
      </a>
         
        
        <a href="/modifier-apprenant/{{ $apprenant->id }}" class="btn btn-info btn-sm">
        <i class="fas fa-edit text-white" ></i>
        </a>
        
        
          <a href="/supprimer-apprenant/{{ $apprenant->id }}" class="btn btn-danger btn-sm" title="" onclick="return confirm(&quot;Confirm delete?&quot;)">
              <i class="fas fa-trash-alt text-white" aria-hidden="true"></i></a>
      
      </td>
    </tr>
    @php
      $ide += 1;
    @endphp
    @endforeach
          
        </table>

        {{ $apprenants->links() }}
    </div>
  </div>
  
</div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>