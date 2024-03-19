 @extends('layout')
@section('container')
       

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

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
       