@extends('layoutsAdmin.app')

@section('title')
    <title>Salle</title>
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Lise des salles</h4>
                            <div class="text-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#add_salle">
                                    <i class="fa fa-plus"></i> Ajouter une salle
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> Num</th>
                                        <th> Nom </th>
                                        <th> Superficie </th>
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($salles as $index => $salle)
                                        <tr>
                                            <td> {{ $salle->numSE }} </td>
                                            <td> {{ $salle->nomSE }}</td>
                                            <td> {{ $salle->superficieSE }} m²</td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-outline-warning"
                                                        data-bs-toggle="modal" data-id="{{ $salle->id }}"
                                                        data-bs-target="#edit_salle{{ $salle->id }}">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-danger"
                                                        data-bs-toggle="modal"
                                                        data-salle-id="{{ $salle->id }}"
                                                        data-bs-target="#delete_salle">
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
            $('button[data-bs-target="#delete_salle"]').click(function () {
                var salleId = $(this).data('salle-id');
                $('#salleId').val(salleId);
                $('#delete-salle-id').text(salleId);
            });
        });

    </script>

@endsection
