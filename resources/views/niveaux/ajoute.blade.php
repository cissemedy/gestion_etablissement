<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  @extends('layout')
  @section('container')
<div class="container text">
  
  <div class="row">
    @if (session('status'))
      <div class="alert bg-success text-white">
        {{ session('status')}}
      </div>
    @endif
    <ul>
      @foreach ($errors->all() as $error)
      <li class="alert alert-danger">{{$error}}</li>
      @endforeach
    </ul>

    <hr>
    <h1  class="container text-center">Veuiller remplire les champs</h1>
    <hr>
    <form action="/ajoute/traitement" method="POST" class="form-group">
      @csrf
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><h1 class="nav text-center">Niveau</h1>
            </a>
          </div>
        </nav>
        
          
          
      <div class="form-group">
        
      <div class="form-group">
        <label for="">licence 1</label>
        <input type="text" class="form-control" id="" name="licence_1">
      </div>
      <div class="form-group">
        <label for="">licence 2</label>
        <input type="text" class="form-control" id="" name="licence_2">
      </div>
      <div class="form-group">
        <label for="">licence 1</label>
        <input type="text" class="form-control" id="" name="licence_3">
      </div>

      <div class="form-group">
        <label for="">master 1</label>
        <input type="text" class="form-control" id="" name="master_1">
      </div>
      <div class="form-group">
        <label for="">master 2</label>
        <input type="text" class="form-control" id="" name="master_2">
      </div>
      <div class="form-group">
        <label for="">Doctorat</label>
        <input type="text" class="form-control" id="" name="doctorat">
      </div>

    <div>
      <br>
      <button type="submit"class="btn btn-info">ajouter un niveu à la liste niveau</button>
      <br> </br> 
      <a href="/niveau"class="btn btn-secondary">Revenir à la liste niveau</a>
    </div>
    </form>
  </div>
</div>
@endsection  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>