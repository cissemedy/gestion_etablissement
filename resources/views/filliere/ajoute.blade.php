<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  @extends('layout')
  @section('container')
    
  <div class="container">

      <div class="row">
       <div class="col s12">
       <div class="d-grid gap-2">
       <button class="btn btn-info" type="button">Filliere</button>
      </div>
      <hr>

      @if (session('status'))
        <div class="alert alert-success">
          {{session('status')}}
        </div>
      @endif

      <ul>
        @foreach($errors->all() as $error)
          <li class="alert alert-danger"> {{$error}} </li>
      
        @endforeach
      </ul>
    <form action="/ajouté/traitement" method="POST" class="form-group">
      @csrf
      <div class="form-group">
        <label for="">Nom :</label>
        <input type="text" class="form-control" id="" name="nom">
      </div>
      <div class="form-group">
        <label for="code_numerique">code_numerique :</label>
        <input type="code_numerique" class="form-control" id="code_numerique" name="code_numerique">
      </div>
      <div class="form-group">
        <label for="acronyme">acronyme :</label>
        <input type="text" class="form-control" id="acronyme" name="acronyme">
      </div>
      <div class="form-group">
        <label for="niveau">niveau</label>
        <input type="text" class="form-control" id="niveau" name="niveau">
      </div>
      <div class="form-group">
        <label for="identifiant">numero_identifiant :</label>
        <input type="number" class="form-control" id="identifiant" name="numero_identifiant" >
      </div>
      <br>
      <button type="submit" class="btn btn-info">Ajouter un filliere</button>
  
  <br></br>

  <a href="/filliere" class="btn btn-secondary">Revenir à la liste des filliere</a>
</form>
  </div>
</div> 
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>