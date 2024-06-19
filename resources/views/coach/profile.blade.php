@extends('layoutsAdmin.app')

@section('title')
<title>Profil coach</title>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <br><br><br>
            <div class="card">
                <div class="card-header">
                    Profil Coach
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h5><span style="color: #f01616;"><strong>Nom :</strong></span> &nbsp;{{ $coach->user->nom }}</h5>
                            <h5><span style="color: #f01616;"><strong>Prenom :</strong></span> &nbsp;{{ $coach->user->prenom }}</h5>
                        </div>
                        <div class="col-md-8">
                            <p><strong>Email :</strong> {{ $coach->user->email }}</p>
                            <p><strong>Num de téléphone :</strong> {{ $coach->user->tel }}</p>
                            <hr>
                            <p><strong>Date de début :</strong> {{ optional($coach->user->created_at)->format('Y-m-d - H:i:s') ?? '--/--/--' }}</p>
                            <p><strong>Salaire :</strong> {{ $coach->salaire }} DH</p>
                            <hr>
                            <p><strong>Type de sport :</strong> {{ $coach->classe->libelle }}</p>
                            <p><strong>Nombre des adherents :</strong> {{ $totalStudentsCount }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection