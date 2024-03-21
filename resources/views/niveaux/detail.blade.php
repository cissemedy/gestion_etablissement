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
                <a href="/niveau" class="m-2 text-black" title="">
                    <h2 class="text-center"></i></a>Details</h2><hr>
                <div class="card-body">
                    
                <p class="card-title">Licence 1 : {{ $niveaux->licence_1 }}</p>
                    <p class="card-title">Licence 2 : {{ $niveaux->licence_2 }}</p>
                    <p class="card-title">Licence 3 : {{ $niveaux->licence_3 }}</p>
                    <p class="card-text">Master 1 : {{ $niveaux->master_1 }}</p>
                    <p class="card-text">Master 2 : {{ $niveaux->master_2 }}</p>
                    <p class="card-text">Doctorat : {{ $niveaux->doctorat }}</p>
                </div>
            </hr>
            
        </div>
        <a href="/niveau" class="btn btn-secondary">Revenir a la liste des niveaux</a>

        @endsection

            
</body>
</html>
