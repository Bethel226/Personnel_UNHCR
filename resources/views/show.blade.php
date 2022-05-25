@extends('layout.main')
@section('contenu')
<h2 class="text-center text-primary shadow p-3 mb-5 bg-body rounded">Détail du personnel {{$finds->id}}</h2>
<div class="card m-3 shadow p-3 bg-body rounded" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{asset('storage').'/'.$finds->photo}}" style="width:150px;height:130px" alt="">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title text-center text-primary">Carte d'accès du personnel UNHCR</h5>
                <p class="card-text">Nom: {{$finds->nom}}</p>
                <p class="card-text">Prénom: {{$finds->prenom}}</p>
                <p class="card-text">Matricule: {{$finds->matricule}}</p>
                <p class="card-text">Sexe: {{$finds->genre}}</p>
                <p class="card-text">Poste: {{$finds->poste}}</p>
                <p class="card-text">Titre: {{$finds->titre}}</p>
            </div>
        </div>
        <img src="{{asset('Images/code.png')}}" style="width:500px;height:80px" alt="">
    </div>
</div>

@endsection