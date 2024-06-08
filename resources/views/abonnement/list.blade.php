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


            <!-- Add Abonnement Modal -->
            <div class="modal fade" id="add_abonnement" tabindex="-1" aria-labelledby="addabonnementLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addabonnementLabel">Ajouter une abonnement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('abonnement.create') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-focus select-focus">
                                            <label class="col-form-label">Cours <span
                                                    class="text-danger">*</span></label>
                                            <select class="select floating" name="id_cours">
                                                <option>Choisir</option>
                                                @foreach($classes as $classe)
                                                    <option
                                                        value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-focus select-focus">
                                            <label class="col-form-label">Duree <span
                                                    class="text-danger">*</span></label>
                                            <select class="select floating" name="duree">
                                                <option>Choisir</option>
                                                <option>1 Mois</option>
                                                <option>3 Mois</option>
                                                <option>6 Mois</option>
                                                <option>1 An</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Tarif <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="number" name="tarif">
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                                @if(isset($errorMessage))
                                    <div class="alert alert-danger">
                                        {{ $errorMessage }}
                                    </div>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection
