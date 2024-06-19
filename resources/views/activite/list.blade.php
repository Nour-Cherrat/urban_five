@extends('layoutsAdmin.app')

@section('title')
    <title>Activite</title>
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Lise des activites</h4>
                            <div class="text-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#add_activite">
                                    <i class="fa fa-plus"></i> Ajouter une activite
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th> Libelle </th>
                                        <th> Description</th>
                                        <th> Type</th>
                                        <th> Statut</th>
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($activites as $index => $activite)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td> {{ $activite->libelle }} </td>
                                            <td> {{ $activite->description }}</td>
                                            <td>
                                                @if($activite->type == 'Individuelle')
                                                    <label
                                                        class="badge badge-info">{{ $activite->type }}</label>
                                                @elseif($activite->type == 'Collective')
                                                    <label
                                                        class="badge badge-primary">{{ $activite->type }}</label>
                                                @endif
                                            </td>
                                            <td>
                                                @if($activite->statut == 'Actif')
                                                    <label
                                                        class="badge badge-success">{{ $activite->statut }}</label>
                                                @elseif($activite->statut == 'Non-actif')
                                                    <label
                                                        class="badge badge-danger">{{ $activite->statut }}</label>
                                                @endif
                                            </td>
                                            <td class="text-right">
                                                <a class="btn btn-outline-primary update-status-btn" href="#"
                                                   data-activite-id="{{ $activite->id }}">
                                                    <i class="fa fa-rotate-right"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-warning"
                                                        data-bs-toggle="modal" data-id="{{ $activite->id }}"
                                                        data-bs-target="#edit_activite{{ $activite->id }}">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-danger"
                                                        data-bs-toggle="modal"
                                                        data-activite-id="{{ $activite->id }}"
                                                        data-bs-target="#delete_activite">
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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $('button[data-bs-target="#delete_activite"]').click(function () {
                var activiteId = $(this).data('activite-id');
                $('#activiteId').val(activiteId);
                $('#delete-activite-id').text(activiteId);
            });
        });

    </script>

@endsection
