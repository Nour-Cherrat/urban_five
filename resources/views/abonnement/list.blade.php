@extends('layoutsAdmin.app')

@section('title')
    <title>Abonnements</title>
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Lise des abonnements</h4>
                            <p class="card-description">test <code> test</code>
                            </p>
                            <div class="text-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#add_abonnement">
                                    <i class="fa fa-plus"></i> Ajouter une abonnement
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th> Cours</th>
                                        <th> Duree</th>
                                        <th> Tarif</th>
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($abonnements as $index => $abonnement)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td> {{ $abonnement->classe->libelle }} </td>
                                            <td> {{ $abonnement->duree }} </td>
                                            <td> {{ $abonnement->tarif }} </td>
                                            <td class="text-right">
                                                <a class="btn btn-outline-info"
                                                   href="#"><i
                                                        class="fa fa-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-warning"
                                                        data-bs-toggle="modal" data-id="{{ $abonnement->id }}"
                                                        data-bs-target="#edit_abonnement{{ $abonnement->id }}">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-danger"
                                                        data-bs-toggle="modal" data-abonnement-id="{{ $abonnement->id }}"
                                                        data-bs-target="#delete_abonnement">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


@endsection
