<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://ajoute.blade.php">
  </head>
  <body>  
   
  @extends('layout')
  @section('title')
  @section('container')
  
<div class="container text-center">
  <div class="row">
<div class="card m-2">
    <h1 class="card-header">GESTION ETABLISSEMENT</h1><br>
  <hr>
   <a href="/ajoute" class="btn btn-info mb-3">Ajouter niveau
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
          <pat1XA²DS      h d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
        </svg>
   </a>
        
  

    <div class="col s12">
      <hr>
      @if (session('status'))
        <div class="alert bg-success text-white">
          {{ session('status')}}
        </div>
      @endif
    </div>
      <table class="table table-striped table-bordered">
        <thead class="table-light">
          <tr>
          
            <th><h4>#</h4></th>
            <th><h4>licence 1</h4></th>
            <th><h4>licence 2</h4></th>
            <th><h4>licence 3</h4></th>
            <th><h4>Master 1</h4></th>
            <th><h4>Master 2</h4></th>
            <th><h4>Doctorat</h4></th>
            <th><h4>Actions</h4></th>
            
          </tr>
        </thead>
        @php
        $ide = 1;
        @endphp

        
          @foreach($niveaux as $niveau)     
          <tr>    
            <td>{{$niveau->id}}</td>
            <td>{{$niveau->licence_1}}</td>
            <td>{{$niveau->licence_2}}</td>
            <td>{{$niveau->licence_3}}</td>
            <td>{{$niveau->master_1}}</td>
            <td>{{$niveau->master_2}}</td>
            <td>{{$niveau->doctorat}}</td>
            
            <td>

            <a href="/detail-niveau/{{ $niveau->id }}" class="btn btn-success btn-sm">
        <i class="fas fa-eye text-white" aria-hidden="true"></i>
      </a>
              
              <a href="/update-niveau/{{ $niveau->id }}" title="modifier un niveau" class= "btn btn-info btn-sm">
              <i class="fas fa-edit text-white" ></i>
              </a>
              <a href="delete-niveau/{{ $niveau->id }}"  class= "btn btn-danger" title="" onclick="return confirm(&quot;Confirm delete?&quot;)">
              <i class="fas fa-trash-alt text-white" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
          @php
          $ide += 1;
          @endphp
          @endforeach    
          
          
        </table> 
         {{ $niveaux->links() }} 
  </div>
</div>
@endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>