@extends('layoutsAdmin.app')

@section('title')
    <title>Détails de l'entrée du formulaire de contact </title>
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="card">
                                    <div class="card-header"><strong>Détails de l'entrée du formulaire de
                                            contact</strong></div>
                                    <div class="card-body">
                                        <p><strong>Name :</strong> {{ $contact->nom }}</p>
                                        <p><strong>Email :</strong> {{ $contact->email }}</p>
                                        <p><strong>Date :</strong> {{ optional($contact->created_at)->format('Y-m-d - H:i:s') ?? '- -' }}</p>
                                        <p><strong>Objet :</strong> {{ $contact->objet }}</p>
                                        <p><strong>Message :</strong> {{ $contact->msg }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
