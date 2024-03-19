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
 

<div class="container text">
  <div class="row">
        
        <h3 class="text-center">La Modification des Apprenants</h3>

        @if (session('status'))
            <div class="alert bg-success text-white">
                {{ session('status') }}
            </div>
        @endif

        <ul>
          @foreach ($errors->all() as $error)
            <li class="alert alert-danger"> {{ $error }} </li>

          @endforeach
        </ul>
        <a href="#" class="btn btn-primary  mb-3">
        Modifier un apprenant
        </a>
        <form action="/modifier/traitement" method="POST"  class="form-group">
            @csrf

            <input type="text" name="id" style="display: none;" value="{{ $apprenants->id }}">
           
            <div class="form-group">
              <label for="">Matricule :</label>
              <input type="text" class="form-control" id="nom" placeholder="saisir votre nom" name="matricule" value="{{ $apprenants->matricule }}">
              
            </div>
        <div class="form-group">
            <label for="">Nom :</label>
            <input type="text" class="form-control" id="nom" placeholder="saisir votre nom" name="nom" value="{{ $apprenants->nom }}">
            
          </div>
          <div class="form-group">
            <label for="">Prenom :</label>
            <input type="text" class="form-control" id="" placeholder="saisir votre prenom" name="prenom" value="{{ $apprenants->prenom }}">
          </div>

        </div>
        <div class="form-group">
          <label for="">Email :</label>
          <input type="text" class="form-control" id="" placeholder="saisir votre email" name="email" value="{{ $apprenants->email }}">
        </div>

        <div class="form-group">
            <label for="">Date Naissance :</label>
            <input type="date" class="form-control" id="" placeholder="saisir votre date de naissance" name="date_naissance" value="{{ $apprenants->date_naissance }}">
          </div>

          <div class="form-group">
            <label for="">Telephone :</label>
            <input type="telephone" class="form-control" id="" placeholder="saisir votre numero de telephone" name="telephone" value="{{ $apprenants->telephone }}">
          </div>

          <div class="form-group">
            <label for="">Adresse :</label>
            <input type="text" class="form-control" id="" placeholder="saisir votre adresse" name="adresse" value="{{ $apprenants->adresse }}">
          </div>

          <div class="form-group">
            <label for="">Universite :</label>
            <input type="text" class="form-control" id="" placeholder="saisir votre etablissement" name="universite_id" value="{{ $apprenants->universite_id }}">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Modifier un apprenant</button>

          <br> </br>
          
          <a href="/apprenant" class="btn btn-danger">Revenir a la liste des apprenants</a>
        </form>


    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>