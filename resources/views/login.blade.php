<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
    @extends('layout')
    @section('container')

      <div class="container">
<div class="row card text-dark btn btn-info">
<h4 class="card-header">Confirmation des champs </h4>

<div class="card-body">
    @if (Session::has('success'))
    <div class="alert bg-success text-white">
        {{ Session::get('success') }}
    </div>
    @endif

    @if (Session::has('error'))
    <div class="alert alert-danger" role="alert">
      {{ Session::get('error') }}
    </div>  
 @endif
 
<form action="{{ route('login') }}" method="POST">
@csrf
<div class="mb-3">
<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
placeholder="Votre email" value="{{ old('email') }}" required>
@error('email')
<div class="invalid-feedback">{{ $message }}</div><br>
@enderror

<div class="mb-3">
  <input type="password" class="form-control required @error('password') is-invalid @enderror" name="password" id="password"
  placeholder="Votre mot de passe" value="{{ old('password') }}" required>
  @error('password')
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<button class="btn btn-info">Envoyer !</button>
<a href="/index" class="btn btn-secondary">Revenir a l'acceuil</a>
</form>
</div>
</div>
</div>
@endsection
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>