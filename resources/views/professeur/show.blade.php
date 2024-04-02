<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>

@extends('layout')
@section('title')
@section('container')

        <div class="card m-2">
            <div class="card-header">
                <a href="/professeur" class="m-2 text-black" title="Retour">
                    <i class="fas fa-arrow-left  btn btn-info btn-sm text-bg-info mb-1 text-light">
                        Retour</i></a><h1 class="text-center">Details</h1>
                    </div>
                <div class="card-body">
                    <h5 class="card-title">Nom : {{ $professeurs->last_name }}</h5>
                    <h5 class="card-title">Prénom : {{ $professeurs->first_name }}</h5>
                    <p class="card-text">Cours : {{ $professeurs->cours }}</p>
                    <p class="card-text">Téléphone : {{ $professeurs->mobile }}</p>
                    <p class="card-text">Email : {{ $professeurs->email }}</p>
                    <p class="card-text">Addresse : {{ $professeurs->address }}</p>
                </div>
            </hr>
        </div>
@endsection

</body>
</html>
