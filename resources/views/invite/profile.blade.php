@extends('layoutsAdmin.app')

@section('title')
<title>Profil Invité</title>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <br><br><br>
            <div class="card">
                <div class="card-header" style="background-color: {{ $invite->gender === 'M' ? '#007bff' : '#ff69b4' }}; color: white; text-align: center; padding: 15px 0;">
                    <h3> Profil Invité </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h5><span style="color: {{ $invite->gender === 'M' ? '#007bff' : '#ff69b4' }} ;"><strong>Nom :</strong></span> {{ $invite->nom }}</h5>
                            <h5><span style="color: {{ $invite->gender === 'M' ? '#007bff' : '#ff69b4' }} ;"><strong>Prenom :</strong></span> &nbsp;{{ $invite->prenom }}</h5>
                        </div>
                        <div class="col-md-8">
                            <p><strong>Email :</strong> {{ $invite->email }}</p>
                            <p><strong>Num de téléphone :</strong> {{ $invite->tel }}</p>
                            <hr>
                            <p><strong>Sexe :</strong> {{ $invite->gender }} </p>
                            <p><strong>Date de naissance :</strong> {{ $invite->date_naissance ?? '--/--/--' }}</p>
                            <p><strong>Date de visite :</strong> {{ optional($invite->date)->format('Y-m-d - H:i:s') ?? '--/--/--' }}</p>
                            <hr>
                            <p><strong>Type de sport :</strong> {{ $invite->classe->libelle }}</p>
                            <p><strong>Nombre de visites :</strong> {{ $visitsCount }} </p>
                            <p><strong>Historique des visites :</strong></p>
                            <ul>
                                @foreach($visitHistory as $visit)
                                <li>{{ $visit->date }} -  {{ $visit->classe->libelle }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection