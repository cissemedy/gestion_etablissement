@extends('layout')
@section('content')

        <div class="card m-2">
            <div class="card-header"><h2>Professeurs</h2></div>
            <div class="card-body">
                <a href="{{ url('/professeur/create') }}" class="btn btn-primary btn-sm" title="Ajouter Professeur">
                    <i class="fas fa-plus" aria-hidden="true"></i>
                </a>
                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                        <thead>
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
                </div>
            </div>
        </div>
@endsection
