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
       <button class="btn btn-primary" type="button">RESPONSABLE</button>
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
    <form action="/ajouter/traitement" method="POST" class="form-group">
      @csrf
      <div class="form-group">
        <label for="">Nom :</label>
        <input type="text" class="form-control" id="" name="nom">
      </div>
      <div class="form-group">
        <label for="nom">Prenom :</label>
        <input type="text" class="form-control" id="" name="prenom">
      </div>
      <div class="form-group">
        <label for="adresse">Adresse :</label>
        <input type="text" class="form-control" id="adresse" name="adresse">
      </div>
      <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" class="form-control" id="e-mail" name="E_mail">
      </div>
      <div class="form-group">
        <label for="">Numéro :</label>
        <input type="numero" class="form-control" id="numero" name="numero" >
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Ajouter un responsable</button>
  
  <br></br>

  <a href="/responsable" class="btn btn-secondary">Revenir à la liste des responsables</a>
</form>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  
</div>
</body>
</html>