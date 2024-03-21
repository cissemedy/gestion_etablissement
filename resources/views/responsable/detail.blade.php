@extends('layout')
@section('container')

        <div class="card m-2">
            <div class="card-header">
                <a href="/responsable" class="m-2 text-black" title="Retour">
                    <i class="fas fa-arrow-left"></i></a>Detail</div>
                <div class="card-body">
                    <h6 class="card-title"> id : {{ $responsable->id }} </h6>
                    <h6 class="card-title"> Nom : {{ $responsable->Nom }}</h6>
                    <h6 class="card-title"> Prénom : {{ $responsable->Prenom }}<h6>
                    <h6 class="card-title"> adresse : {{ $responsable->adresse }}<h6>
                    <h6 class="card-title"> E_mail : {{ $responsable->E_mail }}<h6>
                    <h6 class="card-title"> numero : {{ $responsable->numero }}<h6>
                </div>
            </hr>
        </div>
@stop
