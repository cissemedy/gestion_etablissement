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
                <a href="/apprenant" class="m-2 text-black" title="">
                    <h2 class="text-center"></i></a>Details</h2><hr>
                <div class="card-body">
                    
                <p class="card-title">Matricule : {{ $apprenants->matricule }}</p>
                    <p class="card-title">Nom : {{ $apprenants->nom }}</p>
                    <p class="card-title">Prénom : {{ $apprenants->prenom }}</p>
                    <p class="card-text">Email : {{ $apprenants->email }}</p>
                    <p class="card-text">Date naissance : {{ $apprenants->date_naissance }}</p>
                    <p class="card-text">Telephone : {{ $apprenants->telephone }}</p>
                    <p class="card-text">Addresse : {{ $apprenants->adresse }}</p>
                    <p class="card-text">Universite : {{ $apprenants->universite_id }}</p>
                </div>
            </hr>
            
        </div>
        <a href="/apprenant" class="btn btn-secondary">Revenir a la liste des apprenants</a>

        @endsection

            
</body>
</html>
