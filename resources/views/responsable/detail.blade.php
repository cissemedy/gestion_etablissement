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
                    
               
                    <p class="card-title">Nom : {{ $responsable->nom }}</p>
                    <p class="card-title">Prénom : {{ $responsable->prenom }}</p>
                    <p class="card-text">Email : {{ $responsable->adresse }}</p>
                    <p class="card-text">Addresse : {{ $responsable->E_mail }}</p>
                    <p class="card-text">Numero : {{ $responsable->numero }}</p>
                </div>
            </hr>
            
        </div>
        <div class="card m-2">
            <div class="card-header">
                <a href="/responsable" class="m-2 text-black" title="Retour">
                    <i class="fas fa-arrow-left  btn btn-info btn-sm text-bg-info mb-1 text-light">
                        Retour</i></a><h1 class="text-center"></h1>
                    </div>
        @endsection

            
</body>
</html>

