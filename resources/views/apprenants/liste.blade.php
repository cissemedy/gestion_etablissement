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
 

<div class="container text-center">
  <div class="row">
    <div>
      <h3 class="text-center">La liste des Apprenants</h3>
      <a href="#" class="btn btn-primary  mb-3">
        Ajouter un apprenant
      </a>
        @if (session('status'))
          <div class="alert bg-success text-white">
            {{ session('status') }}
          </div>
        @endif

        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Matricule</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Email</th>
              <th>Date Naissance</th>
              <th>Adresse</th>
              <th>Etablissement</th>
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
        <a href="/detail-apprenant/{{ $apprenant->id }}" class="btn btn-secondary btn-sm">
          Detail
        </a>
        <a href="/ajouter-apprenant/{{ $apprenant->id }}" class="btn btn-primary btn-sm">
          Ajouter
        </a>
        <a href="/modifier-apprenant/{{ $apprenant->id }}" class="btn btn-warning btn-sm">
          Modifier
        </a>
        <a href="/supprimer-apprenant/{{ $apprenant->id }}" class="btn btn-danger btn-sm">
          Supprimer
        </a>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>