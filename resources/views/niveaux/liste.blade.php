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
    
  
<div class="container text-center">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"> 
              <h1>GESTION ETABLISSEMENT</h1>
            
          </div>
        </nav>
       
        <span href="/ajoute"class="btn btn-primary">liste des niveau existe dans l'établissement</span>
        
  <div class="row">

    <div class="col s12">
      <hr>
      @if (session('status'))
        <div class="alert bg-success text-white">
          {{ session('status')}}
        </div>
      @endif
    </div>
      <table class="table table-striped table-bordered">
        <thead>
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
              <a href="/ajoute" title="ajouter un niveau" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                </svg>
              </a>
              <a href="/update-niveau/{{ $niveau->id }}" title="modifier un niveau" class= "btn btn-success"><svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg>
              </a>
              <a href="delete-niveau/{{ $niveau->id }}" title="supprimer un niveau"  class= "btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z"/></svg>
              </a>
            </td>
          </tr>
          @endforeach    
          
          
        </table> 
         
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>