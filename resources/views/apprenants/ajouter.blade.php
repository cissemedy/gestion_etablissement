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
  @section('container')
      
<strong>total users</strong>
<div class="container text">
  <div class="row">
        
        <h1 class="text-center">La liste des Apprenants</h1>

        @if (session('status'))
            <div class="alert bg-success text-white">
                {{ session('status') }}
            </div>
        @endif

        <ul>
          <ul>
            @foreach($errors->all() as $error)
              <li class="alert alert-danger"> {{$error}} </li>
          
            @endforeach
          </ul>
         
        <a href="/apprenant" class="btn btn-info  mb-3">
        Ajouter un(e) apprenant(e)
        </a>
        <form action="/ajouter/traitement" method="POST"  class="form-group">
            @csrf
           
            <div class="form-group">
              
              <label for="">Matricule :</label>
              <input type="text" class="form-control" id="nom" placeholder="saisir votre nom" name="matricule">
              
            </div>
        <div class="form-group">
            <label for="">Nom :</label>
            <input type="text" class="form-control" id="nom" placeholder="saisir votre nom" name="nom">
            
          </div>
          <div class="form-group">
            <label for="">Prenom :</label>
            <input type="text" class="form-control" id="" placeholder="saisir votre prenom" name="prenom">
           
          </div>

        </div>
        <div class="form-group">
          <label for="">Email :</label>
          <input type="text" class="form-control" id="" placeholder="saisir votre email" name="email">
        </div>

        <div class="form-group">
            <label for="">Date Naissance :</label>
            <input type="date" class="form-control" id="" placeholder="saisir votre date de naissance" name="date_naissance">
          </div>

          <div class="form-group">
            <label for="">Telephone :</label>
            <input type="telephone" class="form-control" id="" placeholder="saisir votre numero de telephone" name="telephone">
          </div>

          <div class="form-group">
            <label for="">Adresse :</label>
            <input type="text" class="form-control" id="" placeholder="saisir votre adresse" name="adresse">
          </div>

          <div class="form-group">
            <label for="">Universite :</label>
            <input type="text" class="form-control" id="" placeholder="saisir votre etablissement" name="universite_id">
          </div>
          <br>
          <button type="submit" class="btn btn-info">Ajouter un apprenant</button>

          <br> </br>
          
          <a href="/apprenant" class="btn btn-secondary">Revenir a la liste des apprenants</a>
        </form>


    </div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>