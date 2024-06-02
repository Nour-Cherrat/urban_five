@extends('layoutsAdmin.app')

@section('title')
    <title>Adherent</title>
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Lise des adherents</h4>
                            <p class="card-description">test <code> test</code>
                            </p>
                            <div class="text-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#add_adherent">
                                    <i class="fa fa-plus"></i> Ajouter un adherent
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th> Nom Prenom</th>
                                        <th> Date Inscription</th>
                                        <th> Cours</th>
                                        <th> Statut</th>
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($adherents as $index => $adherent)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td> {{ $adherent->nom }} {{ $adherent->prenom }}</td>
                                            <td> {{ $adherent->date_inscription }}</td>
                                            <td> {{ $adherent->classe->libelle }}</td>
                                            <td>
                                                @if($adherent->statut == 'Actif')
                                                    <label class="badge badge-success">{{ $adherent->statut }}</label>
                                                @elseif($adherent->statut == 'Non-actif')
                                                    <label class="badge badge-danger">{{ $adherent->statut }}</label>
                                                @endif
                                            </td>
                                            <td class="text-right">
                                                <a class="btn btn-outline-info"
                                                   href="#"><i
                                                        class="fa fa-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-warning"
                                                        data-bs-toggle="modal" data-id="{{ $adherent->id }}"
                                                        data-bs-target="#edit_adherent{{ $adherent->id }}">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-danger"
                                                        data-bs-toggle="modal" data-adherent-id="{{ $adherent->id }}"
                                                        data-bs-target="#delete_adherent">
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

            <!-- Add Adherent Modal -->
            <div class="modal fade" id="add_adherent" tabindex="-1" aria-labelledby="addadherentLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addadherentLabel">Ajouter un adherent</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('adherent.create') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Nom <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="nom">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Prenom <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="prenom">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Email </label>
                                            <input class="form-control floating" type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Tel </label>
                                            <input class="form-control floating" type="number" name="tel">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Date inscription</label>
                                            <input class="form-control" type="date" name="date_inscription">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-focus select-focus">
                                            <label class="col-form-label">Sexe <span
                                                    class="text-danger">*</span></label>
                                            <select class="select floating" name="gender">
                                                <option>Choisir</option>
                                                <option>F</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-focus select-focus">
                                            <label class="col-form-label">Cours <span
                                                    class="text-danger">*</span></label>
                                            <select class="select floating" name="id_classe">
                                                <option>Choisir</option>
                                                @foreach($classes as $classe)
                                                    <option
                                                        value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

@endsection