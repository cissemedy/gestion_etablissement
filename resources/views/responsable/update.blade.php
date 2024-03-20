<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
   
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  </head>
  <body>
  @extends('layout')
  @section('title')
  @section('container')
  <div class="container">
    <h1>Modifier un responsable</h1>

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
          <li class="alert alert-danger">{{$error}} </li>
        @endforeach
      </ul>


    <form action="/updat/traitement" method="POST" class="form-group">
      @csrf

      <input type="text" name="id" style="display: none;" value="{{$responsables->id}}">

      <div class ="form-group">   
        <label for="nom">Nom:</label>
        <input type= "text" class="form-control" id="nom" name="nom" value="{{ $responsables->nom }}">
      </div>
      <div class="form-group">
        <label for="prenom">Prenom :</label>
        <input type= "text" class="form-control" id="prenom" name="prenom" value="{{ $responsables->prenom }}">
      </div>
      <div class="form-group">
        <label for="adresse">Adresse :</label>
        <input type= "text" class="form-control" id="adresse" name="adresse" value="{{ $responsables->adresse }}">
      </div>
      <div class="form-group">
        <label for="E_mail">E-mail</label>
        <input type= "text" class="form-control" id="E_mail" name="E_mail" value="{{ $responsables->E_mail }}">
      </div>
      <div class="form-group">
        <label for="numero">Numéro :</label>
        <input type="numero" class="form-control" id="" name="numero" value="{{ $responsables->numero }}">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Modifier un responsable</button>
  
  <br></br>

  <a href="/responsable" class="btn btn-secondary">Revenir à la liste des responsables</a>
</form>
  </div>
</div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>