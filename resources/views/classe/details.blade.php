@extends('layoutsAdmin.app')

@section('title')
<title>Cours : Détails</title>
@endsection

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row justify-content-center">
            <div class="col-lg-8 grid-margin stretch-card mx-auto">
                <div class="card">
                    <div class="card-header"><strong>Détails du cours </strong></div>
                    <div class="card-body">
                        <p><span style="color: #f01616;"><strong>Libelle :</strong></span> {{ $classe->libelle }}</p>
                        <p><span style="color: #f01616;"><strong>Num salle :</strong></span> {{ $classe->num_salle }}</p>
                        <p><span style="color: #f01616;"><strong>Coach :</strong></span> {{ $classe->coach->user->nom }} {{ $classe->coach->user->prenom }}</p>
                        <p><span style="color: #f01616;"><strong>Nombre des adherents :</strong></span> {{ $classe->adherents->count() }}</p>
                        <p><span style="color: #f01616;"><strong>Description :</strong></span> {{ $classe->desc }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection 