<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>

@extends('layout')
@section('container')  

<div class="card m-2">
            <div class="card-header">
                <a href="/responsable" class="m-2 text-black" title="">
                    <h2 class="text-center"></i></a>Details</h2><hr>
                <div class="card-body">
                    
               
                    <p class="card-title">Nom : {{ $responsables->nom }}</p>
                    <p class="card-title">Prénom : {{ $responsables->prenom }}</p>
                    <p class="card-text">Email : {{ $responsables->adresse }}</p>
                    <p class="card-text">Addresse : {{ $responsables->E_mail }}</p>
                    <p class="card-text">Numero : {{ $responsables->numero }}</p>
                </div>
            </hr>
            
        </div>
        <a href="/responsable" class="btn btn-secondary">Revenir a la liste des responsables</a>

        @endsection

            
</body>
</html>

@extends('layout')
@section('container')

        <div class="card m-2">
            <div class="card-header">
                <a href="/responsable" class="m-2 text-black" title="Retour">
                    <i class="fas fa-arrow-left"></i></a>Detail</div>
                <div class="card-body">
                    <h6 class="card-title"> id : {{ $responsable->id }} </h6>
                    <h6 class="card-title"> Nom : {{ $responsable->Nom }}</h6>
                    <h6 class="card-title"> Prénom : {{ $responsable->Prenom }}<h6>
                    <h6 class="card-title"> adresse : {{ $responsable->adresse }}<h6>
                    <h6 class="card-title"> E_mail : {{ $responsable->E_mail }}<h6>
                    <h6 class="card-title"> numero : {{ $responsable->numero }}<h6>
                </div>
            </hr>
        </div>
@stop
