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
                <a href="/filliere" class="m-2 text-black" title="">
                    <h2 class="text-center"></i></a>Details</h2><hr>
                <div class="card-body">
                    
                <p class="card-title">Matricule : {{ $fillieres->matricule }}</p>
                    <p class="card-title">Nom : {{ $fillieres->nom }}</p>
                    <p class="card-title">Code Numerique : {{ $fillieres->code_numerique }}</p>
                    <p class="card-text">Acronyme : {{ $fillieres->acronyme }}</p>
                    <p class="card-text">Niveau : {{ $fillieres->niveau }}</p>
                    <p class="card-text">Numero Identifiant : {{ $fillieres->numero_identifiant }}</p>
                   
                </div>
            </hr>
            
        </div>
        <a href="/filliere" class="btn btn-secondary">Revenir a la liste des apprenants</a>

        @endsection

            
</body>
</html>
