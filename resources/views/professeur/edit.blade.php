@extends('layout')
@section('content')

        <div class="card m-2">
            <div class="card-header"><a href="/professeur" class="m-2 text-dark" title="Retour">
                <i class="fas fa-arrow-left"></i></a>Modifier</div>
                <div class="card-body">
                    <form action="{{ url('professeur/'.$professeurs->id) }}" method="post">
                        {!! csrf_field() !!}
                        @method("PATCH")
                        <input type="hidden" name="id" id="id" value="{{$professeurs->id}}" id="id" />
                        <label>Nom</label></br>
                        <input type="text" name="last_name" id="last_name" value="{{$professeurs->last_name}}" class="form-control"></br>
                        <label>Prénom</label></br>
                        <input type="text" name="first_name" id="first_name" value="{{$professeurs->first_name}}" class="form-control"></br>
                        <label>Cours</label></br>
                        <input type="text" name="cours" id="cours" value="{{$professeurs->cours}}" class="form-control"></br>
                        <label>Téléphone</label></br>
                        <input type="text" name="mobile" id="mobile" value="{{$professeurs->mobile}}" class="form-control"></br>
                        <label>Email</label></br>
                        <input type="text" name="email" id="email" value="{{$professeurs->email}}" class="form-control"></br>
                        <label>Addresse</label></br>
                        <input type="text" name="address" id="address" value="{{$professeurs->address}}" class="form-control"></br>
                        <input type="submit" value="Modifier" class="btn btn-primary btn-sm">
                    </form>

                </div>
        </div>
@stop
