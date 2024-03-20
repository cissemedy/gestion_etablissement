@extends('layout')
@section('container')

        <div class="card m-2">
            <div class="card-header">
                <a href="/professeur" class="m-2 text-black" title="Retour">
                    <i class="fas fa-arrow-left"></i></a>Detail</div>
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
@stop
