@extends('layoutsAdmin.app')

@section('title')
    <title>Invités</title>
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Lise des invités</h4>
                            <p class="card-description">test <code> test</code>
                            </p>
                            <div class="text-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#add_invite">
                                    <i class="fa fa-plus"></i> Ajouter un invite
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
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($invites as $index => $invite)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td> {{ $invite->nom }} {{ $invite->prenom }}</td>
                                            <td> {{ $invite->date }}</td>
                                            <td> {{ $invite->classe->libelle }}</td>
                                            <td class="text-right">
                                                <a class="btn btn-outline-info"
                                                   href="#"><i
                                                        class="fa fa-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-warning"
                                                        data-bs-toggle="modal" data-id="{{ $invite->id }}"
                                                        data-bs-target="#edit_invite{{ $invite->id }}">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-danger"
                                                        data-bs-toggle="modal" data-invite-id="{{ $invite->id }}"
                                                        data-bs-target="#delete_invite">
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
