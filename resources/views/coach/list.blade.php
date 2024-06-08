@extends('layoutsAdmin.app')

@section('title')
    <title>Coaches</title>
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Lise des coaches</h4>
                            <p class="card-description">test <code> test</code>
                            </p>
                            <div class="text-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#add_coach">
                                    <i class="fa fa-plus"></i> Ajouter un coach
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th> Nom Prenom</th>
                                        <th> Cours</th>
                                        <th> Salaire</th>
                                        <th> Stats 1</th>
                                        <th> Stats 2</th>
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($coaches as $index => $coach)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td> {{ $coach->user->nom }} {{ $coach->user->prenom }}</td>
                                            <td> {{ $coach->classe->libelle }}</td>
                                            <td> {{ $coach->salaire }} DH</td>
                                            <td class="text-danger"> 2 <i class="ti-arrow-down"></i></td>
                                            <td class="text-success"> 8 <i class="ti-arrow-up"></i></td>
                                            <td class="text-right">
                                                <a class="btn btn-outline-info"
                                                   href="#"><i
                                                        class="fa fa-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-warning"
                                                        data-bs-toggle="modal" data-id="{{ $coach->id }}"
                                                        data-bs-target="#edit_coach{{ $coach->id }}">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-danger"
                                                        data-bs-toggle="modal" data-coach-id="{{ $coach->id }}"
                                                        data-bs-target="#delete_coach">
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


@endsection
