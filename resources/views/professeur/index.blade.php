<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    

@extends('layout')
@section('container')
<div class="container text-center">
 
  <div class="row">

        <div class="card m-2">
            <div class="card-header text-center"><h1>Professeurs</h1></div>
            <div class="card-body">
                <a href="{{ url('/professeur/create') }}" class="btn btn-info btn-sm" title="Ajouter Professeur">
                    Ajouter
                    <i class="fas fa-plus" aria-hidden="true"></i>
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped  table-bordered">
                        
                        <thead class="table-light">
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Cours</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Adresse</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($professeurs as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->last_name  }}</td>
                                <td>{{ $item->first_name }}</td>
                                <td>{{ $item->cours }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->address }}</td>

                                <td>
                                    <a href="{{ url('/professeur/' . $item->id) }}" class="btn btn-success btn-sm" title="Détail Professeur">
                                        <i class="fas fa-eye text-white" aria-hidden="true"></i></a>
                                    <a href="{{ url('/professeur/' . $item->id . '/edit') }}" class="btn btn-info btn-sm" title="Modifier Professeur">
                                        <i class="fas fa-edit text-white" ></i>
                                    </a>
                                    <form method="POST" action="{{ url('/professeur' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="" class="btn btn-danger btn-sm" title="Supprimer Professeur" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                            <i class="fas fa-trash-alt text-white" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $professeurs->links() }} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>