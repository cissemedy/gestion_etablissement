<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container">

      <div class="row">
       <div class="col s12">
       <div class="d-grid gap-2">
       <button class="btn btn-primary" type="button">AJOUTER UN RESPONSABLE</button>
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
      </ul>
      @endforeach
    <form action="/ajoute/traitement" method="POST" class="form-group">
      @csrf
    <div class="form-group">
    <label for="Nom">Nom</label>
    <input type="text" class="form-control" id="Nom" name="Nom">
  </div>
  <div class="form-group">
    <label for="Prenom">Prenom</label>
    <input type="text" class="form-control" id="Prenom" name="Prenom">
  </div>
  <div class="form-group">
    <label for="Adresse">Adresse</label>
    <input type="text" class="form-control" id="Adresse" name="Adresse">
  </div>
  <div class="form-group">
    <label for="E-mail">E-mail</label>
    <input type="text" class="form-control" id="E-mail" name="E-mail">
  </div>
  <div class="form-group">
    <label for="telephone">Numero</label>
    <input type="tel" class="form-control" id="telephone" name="Numero">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Ajouter</button>
  <button type="submit" class="btn btn-warning me-md-2" type="button">Update</button>
  <button type="submit" class="btn btn-dark" type="button">Delete</button>

  <br></br>

  <a href="responsable"class="btn btn-danger">Revenir à la liste des responsables</a>
</form>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  
</div>
  </body>
</html>