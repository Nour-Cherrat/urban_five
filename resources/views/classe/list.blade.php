@extends('layoutsAdmin.app')

@section('title')
    <title>Classes</title>
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Lise des cours</h4>
                            <p class="card-description">test <code> test</code>
                            </p>
                            <div class="text-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#add_cours">
                                    <i class="fa fa-plus"></i> Ajouter un cours
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th> Libelle</th>
                                        <th> Nbr adehernt</th>
                                        <th> Num salle</th>
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($classes as $index => $classe)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td> {{ $classe->libelle }}</td>
                                            <td> nbr adherent</td>
                                            <td> {{ $classe->num_salle }}</td>
                                            <td class="text-right">
                                                <a class="btn btn-outline-info"
                                                   href="#"><i
                                                        class="fa fa-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-warning"
                                                        data-bs-toggle="modal" data-id="{{ $classe->id }}"
                                                        data-bs-target="#edit_cours{{ $classe->id }}">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-danger"
                                                        data-bs-toggle="modal" data-cours-id="{{ $classe->id }}"
                                                        data-bs-target="#delete_cours">
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

            <!-- Add Cours Modal -->
            <div class="modal fade" id="add_cours" tabindex="-1" aria-labelledby="addcoursLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addcoursLabel">Ajouter un cours</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('cours.create') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Libelle <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="libelle">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Num salle <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="number" name="num_salle">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="schedule-container">
                                            <div class="schedule-row">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Jour <span
                                                                    class="text-danger">*</span></label>
                                                            <select class="form-control" name="jours[]">
                                                                <option value="Lundi">Lundi</option>
                                                                <option value="Mardi">Mardi</option>
                                                                <option value="Mercredi">Mercredi</option>
                                                                <option value="Jeudi">Jeudi</option>
                                                                <option value="Vendredi">Vendredi</option>
                                                                <option value="Samedi">Samedi</option>
                                                                <option value="Dimanche">Dimanche</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Debut <span
                                                                    class="text-danger">*</span></label>
                                                            <input class="form-control" type="time"
                                                                   name="start_times[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Fin <span class="text-danger">*</span></label>
                                                            <input class="form-control" type="time" name="end_times[]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-secondary" id="add-schedule-row"><i
                                                class="fa fa-plus"></i> Ajouter une séance
                                        </button>
                                    </div>
                                </div>
                                <div class="submit-section" style="margin-top: 30px;">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Update Cours Modal -->
            @foreach($classes as $classe)
                <div class="modal fade" id="edit_cours{{ $classe->id }}" tabindex="-1"
                     aria-labelledby="editcoursLabel{{ $classe->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addcoursLabel{{ $classe->id }}">Modifier un cours</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('cours.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{ $classe->id }}">
                                                <label class="col-form-label">Libelle <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="libelle"
                                                       value="{{ $classe->libelle }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Num salle <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="number" name="num_salle"
                                                       value="{{ $classe->num_salle }}">
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

            <!-- Delete Cours Modal -->
            <div class="modal fade" id="delete_cours" tabindex="-1" aria-labelledby="deletecoursLabel"
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
                                <p>Êtes-vous sûr de vouloir supprimer le cours ?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <form method="POST" action="{{ route('cours.delete') }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="hidden" name="coursId" id="coursId" value="">
                                            <button type="submit" class="btn btn-primary continue-btn submit-btn">
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
            $('button[data-bs-target="#delete_cours"]').click(function () {
                var coursId = $(this).data('cours-id');
                $('#coursId').val(coursId);
                $('#delete-course-id').text(coursId);
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('add-schedule-row').addEventListener('click', function () {
                var scheduleContainer = document.getElementById('schedule-container');
                var scheduleRow = document.createElement('div');
                scheduleRow.classList.add('schedule-row');
                scheduleRow.innerHTML = `
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-form-label">Jour <span class="text-danger">*</span></label>
                        <select class="form-control" name="jours[]">
                            <option value="Lundi">Lundi</option>
                            <option value="Mardi">Mardi</option>
                            <option value="Mercredi">Mercredi</option>
                            <option value="Jeudi">Jeudi</option>
                            <option value="Vendredi">Vendredi</option>
                            <option value="Samedi">Samedi</option>
                            <option value="Dimanche">Dimanche</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-form-label">Debut <span class="text-danger">*</span></label>
                        <input class="form-control" type="time" name="start_times[]">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="col-form-label">Fin <span class="text-danger">*</span></label>
                        <input class="form-control" type="time" name="end_times[]">
                    </div>
                </div>
                </div>
            `;
                scheduleContainer.appendChild(scheduleRow);
            });
        });
    </script>

@endsection
