
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
@extends('layout')
@section('container')
        <div class="card m-2">
            <div class="card-header"><a href="/professeur" class="m-2 text-black" title="Retour">
                <i class="fas fa-arrow-left"></i></a>Ajouter un professeur</div>
                <div class="card-body">
                    <form action="{{ url('professeur') }}" method="post">
                        {!! csrf_field() !!}
                        <label>Nom *</label></br>
                        <input type="text" name="last_name" id="last_name" class="form-control"></br>
                        <label>Prénom *</label></br>
                        <input type="text" name="first_name" id="first_name" class="form-control"></br>
                        <label>Cours *</label></br>
                        <input type="text" name="cours" id="cours" class="form-control"></br>
                        <label>Téléphone *</label></br>
                        <input type="text" name="mobile" id="mobile" class="form-control"></br>
                        <label>Email *</label></br>
                        <input type="text" name="email" id="email" class="form-control"></br>
                        <label>Addresse *</label></br>
                        <input type="text" name="address" id="address" class="form-control"></br>
                        <input type="submit" value="Enregistrer" class="btn btn-primary btn-sm">
                    </form>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>

        