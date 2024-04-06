@extends('layout')
@section('container')
<br>
<br>
<br>
<div class="container">
<div class="text-dark btn btn-info" style="margin-left: 35%">
<h4 class="card-header">Confirmation</h4>
<div class="card-body">

    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}

    </div>
    @endif

    @if(Session::has('error'))
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
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"
    placeholder="Votre mot de passe" value="{{ old('password') }}" required>
    @error('password')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    </div>


<button type="submit" class="btn btn-secondary">Envoyer !</button>
<a href="/professeur" class="btn btn-secondary">Revenir a l'acceuil</a>
</form>
</div>
</div>
</div>
@endsection
