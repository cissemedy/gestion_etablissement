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
          <li class="alert alert-danger"> {{$error}} </li>
      
        @endforeach
      </ul>
    <form action="/update/traitement" method="POST" class="form-group">
      @csrf
      <input type="text" name="id" style="display:none" value="{{$responsable->}}"
      <div class="form-group">
        <label for="">Nom :</label>
        <input type="text" class="form-control" id="" name="nom" value="{{$responsable->nom}}">
      </div>
      <div class="form-group">
        <label for="">Prenom :</label>
        <input type="text" class="form-control" id="" name="prenom" value="{{$responsable->prenom}}">
      </div>
      <div class="form-group">
        <label for="">Adresse :</label>
        <input type="text" class="form-control" id="" name="adresse" value="{{$responsable->adresse}}">
      </div>
      <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" class="form-control" id="" name="E_mail" value="{{$responsable->E_mail}}">
      </div>
      <div class="form-group">
        <label for="">Numéro :</label>
        <input type="numero" class="form-control" id="" name="numero" value="{{$responsable->numero}}">
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Modifier un responsable</button>
  
  <br></br>

  <a href="/responsable" class="btn btn-secondary">Revenir à la liste des responsables</a>
</form>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  
</div>
</body>
</html>