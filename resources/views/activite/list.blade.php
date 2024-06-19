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
                                        <th> Libelle</th>
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


            <!-- Add Activite Modal -->
            <div class="modal fade" id="add_activite" tabindex="-1" aria-labelledby="addactiviteLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addactiviteLabel">Ajouter une activite</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('activite.create') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Libelle <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="libelle">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Description <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="description">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-focus select-focus">
                                            <label class="col-form-label">Type <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control" name="type">
                                                <option>Choisir</option>
                                                <option>Individuelle</option>
                                                <option>Collective</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-focus select-focus">
                                            <label class="col-form-label">Statut <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control" name="statut">
                                                <option>Choisir</option>
                                                <option>Actif</option>
                                                <option>Non-actif</option>
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


            <!-- Update Activite Modal -->
            @foreach($activites as $activite)
                <div class="modal fade" id="edit_activite{{ $activite->id }}" tabindex="-1"
                     aria-labelledby="editactiviteLabel{{ $activite->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editactiviteLabel{{ $activite->id }}">Modifier une
                                    activite</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('activite.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{ $activite->id }}">
                                                <label class="col-form-label">Libelle <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="libelle"
                                                       value="{{ $activite->libelle }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Description <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="description"
                                                       value="{{ $activite->description }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-focus select-focus">
                                                <label class="col-form-label">Type <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control" name="type"
                                                        value="{{ $activite->type }}">
                                                    <option
                                                        value="Individuelle" {{ $activite->type === 'Individuelle' ? 'selected' : '' }}>
                                                        Individuelle
                                                    </option>
                                                    <option
                                                        value="Collective" {{ $activite->type === 'Collective' ? 'selected' : '' }}>
                                                        Collective
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-focus select-focus">
                                                <label class="col-form-label">Statut <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control" name="statut"
                                                        value="{{ $activite->statut }}">
                                                    <option
                                                        value="Actif" {{ $activite->statut === 'Actif' ? 'selected' : '' }}>
                                                        Actif
                                                    </option>
                                                    <option
                                                        value="Non-actif" {{ $activite->statut === 'Non-actif' ? 'selected' : '' }}>
                                                        Non-actif
                                                    </option>
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
            @endforeach


            <!-- Delete Activite Modal -->
            <div class="modal fade" id="delete_activite" tabindex="-1" aria-labelledby="deleteactiviteLabel"
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
                                <p>Êtes-vous sûr de vouloir supprimer l'activite ?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <form method="POST" action="{{ route('activite.delete') }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="hidden" name="activiteId" id="activiteId" value="">
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
            $('button[data-bs-target="#delete_activite"]').click(function () {
                var activiteId = $(this).data('activite-id');
                $('#activiteId').val(activiteId);
                $('#delete-activite-id').text(activiteId);
            });
        });

    </script>

@endsection
