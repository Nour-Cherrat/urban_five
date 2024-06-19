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


            <!-- Add salle Modal -->
            <div class="modal fade" id="add_salle" tabindex="-1" aria-labelledby="addsalleLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addsalleLabel">Ajouter une salle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('salle.create') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Num  <span class="text-danger">*</span></label>
                                            <input class="form-control" type="number" name="numSE">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Nom  <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="nomSE">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Superficie <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="number" name="superficieSE">
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


            <!-- Update salle Modal -->
            @foreach($salles as $salle)
                <div class="modal fade" id="edit_salle{{ $salle->id }}" tabindex="-1"
                     aria-labelledby="editsalleLabel{{ $salle->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editsalleLabel{{ $salle->id }}">Modifier une
                                    salle</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('salle.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{ $salle->id }}">
                                                <label class="col-form-label">Num <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="number" name="numSE"
                                                       value="{{ $salle->numSE }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Nom <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="nomSE"
                                                       value="{{ $salle->nomSE }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Superficie <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="number" name="superficieSE"
                                                       value="{{ $salle->superficieSE }}">
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
            @endforeach


            <!-- Delete salle Modal -->
            <div class="modal fade" id="delete_salle" tabindex="-1" aria-labelledby="deletesalleLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Suuprimer</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-header">
                                <p>Êtes-vous sûr de vouloir supprimer la salle ?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <form method="POST" action="{{ route('salle.delete') }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="hidden" name="salleId" id="salleId" value="">
                                            <button type="submit"
                                                    class="btn btn-primary continue-btn submit-btn">
                                                Supprimer
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
