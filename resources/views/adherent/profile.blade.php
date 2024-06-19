@extends('layoutsAdmin.app')

@section('title')
<title>Profil Adherent</title>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <br><br><br>
            <div class="card">
                <div class="card-header" style="background-color: {{ $adherent->gender === 'M' ? '#007bff' : '#ff69b4' }}; color: white; text-align: center; padding: 15px 0;">
                    <h3> Profil Adherent </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h5><span style="color: {{ $adherent->gender === 'M' ? '#007bff' : '#ff69b4' }} ;"><strong>Nom :</strong></span> {{ $adherent->nom }}</h5>
                            <h5><span style="color: {{ $adherent->gender === 'M' ? '#007bff' : '#ff69b4' }} ;"><strong>Prenom :</strong></span> &nbsp;{{ $adherent->prenom }}</h5>
                        </div>
                        <div class="col-md-8">
                            <p><strong>Email :</strong> {{ $adherent->email }}</p>
                            <p><strong>Num de téléphone :</strong> {{ $adherent->tel }}</p>
                            <hr>
                            <p><strong>Sexe :</strong> {{ $adherent->gender }} </p>
                            <p><strong>Date de naissance :</strong> {{ $adherent->date_naissance ?? '--/--/--' }}</p>
                            <p><strong>Date Inscription :</strong> {{ $adherent->date_inscription }}</p>
                            <p><strong>Ville :</strong> {{ $adherent->ville }} </p>
                            <p><strong>Adresse :</strong> {{ $adherent->adresse }} </p>
                            <hr>
                            <p><strong>Type de sport :</strong> {{ $adherent->classe->libelle }}</p>
                            <p><strong>Statut :</strong>
                                @if($adherent->statut == 'Actif')
                                <label class="badge badge-success">{{ $adherent->statut }}</label>
                                @elseif($adherent->statut == 'Non-actif')
                                <label class="badge badge-danger">{{ $adherent->statut }}</label>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection