  

<div class="card m-2">
            <div class="card-header">
                <a href="/apprenant" class="m-2 text-black" title="Retour">
                    <i class="fas fa-arrow-left"></i></a>Detail</div>
                <div class="card-body">
                <p class="card-title">Matricule : {{ $apprenants->matricule }}</p>
                    <p class="card-title">Nom : {{ $apprenants->nom }}</p>
                    <p class="card-title">Prénom : {{ $apprenants->prenom }}</p>
                    <p class="card-text">Cours : {{ $apprenants->email }}</p>
                    <p class="card-text">Téléphone : {{ $apprenants->date_naissance }}</p>
                    <p class="card-text">Email : {{ $apprenants->telephone }}</p>
                    <p class="card-text">Addresse : {{ $apprenants->address }}</p>
                    <p class="card-text">Addresse : {{ $apprenants->universite_id }}</p>
                </div>
            </hr>
        </div>
