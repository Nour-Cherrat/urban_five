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
                            <h4 class="card-title">Liste des cours</h4>
                            @auth
                                @if(auth()->user()->type === 'Admin')
                            <div class="text-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#add_cours">
                                    <i class="fa fa-plus"></i> Ajouter un cours
                                </button>
                            </div>
                                @endif
                            @endauth
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th> Libelle</th>
                                        <th> Nbr adherent</th>
                                        <th> Num salle</th>
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @auth
                                        @if(auth()->user()->type === 'Admin')
                                    @foreach($classes as $index => $classe)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td> {{ $classe->libelle }}</td>
                                            <td> {{ $classe->adherents_count }}</td>
                                            <td> {{ $classe->num_salle }}</td>
                                            <td class="text-right">
                                                <a class="btn btn-outline-info" href="#"><i class="fa fa-eye"></i></a>
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
                                        @elseif(auth()->user()->type === 'Coach')
                                            @foreach($classCoach as $index => $classCoach)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td> {{ $classCoach->libelle }}</td>
                                                    <td> {{ $classCoach->adherents_count }} </td>
                                                    <td> {{ $classCoach->num_salle }}</td>
                                                    <td class="text-right">
                                                        <a class="btn btn-outline-info" href="#"><i class="fa fa-eye"></i></a>
                                                        <button type="button" class="btn btn-outline-warning"
                                                                data-bs-toggle="modal" data-id="{{ $classCoach->id }}"
                                                                data-bs-target="#edit_cours{{ $classCoach->id }}">
                                                            <i class="fa fa-pencil"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    @endauth
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @auth
                @if(auth()->user()->type === 'Admin')
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
                                            <input class="form-control" type="text" name="libelle" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Num salle <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="number" name="num_salle" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="desc" rows="6" required></textarea>
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
                                                            <select class="form-control" name="jours[]" required>
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
                                                            <input class="form-control" type="time" name="start_times[]"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Fin <span class="text-danger">*</span></label>
                                                            <input class="form-control" type="time" name="end_times[]"
                                                                   required>
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
                @endif
            @endauth

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
                                <form method="post" action="{{ route('cours.update', $classe->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{ $classe->id }}">
                                                <label class="col-form-label">Libelle <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="libelle"
                                                       value="{{ $classe->libelle }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Num salle <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="number" name="num_salle"
                                                       value="{{ $classe->num_salle }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Description <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control" name="desc" rows="6"
                                                          required> {{ $classe->desc }} </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="schedule-container-{{ $classe->id }}">
                                                @foreach($classe->schedules as $schedule)
                                                    <div class="schedule-row">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Jour <span
                                                                            class="text-danger">*</span></label>
                                                                    <select class="form-control" name="jours[]">
                                                                        <option
                                                                            value="Lundi" {{ $schedule->jour == 'Lundi' ? 'selected' : '' }}>
                                                                            Lundi
                                                                        </option>
                                                                        <option
                                                                            value="Mardi" {{ $schedule->jour == 'Mardi' ? 'selected' : '' }}>
                                                                            Mardi
                                                                        </option>
                                                                        <option
                                                                            value="Mercredi" {{ $schedule->jour == 'Mercredi' ? 'selected' : '' }}>
                                                                            Mercredi
                                                                        </option>
                                                                        <option
                                                                            value="Jeudi" {{ $schedule->jour == 'Jeudi' ? 'selected' : '' }}>
                                                                            Jeudi
                                                                        </option>
                                                                        <option
                                                                            value="Vendredi" {{ $schedule->jour == 'Vendredi' ? 'selected' : '' }}>
                                                                            Vendredi
                                                                        </option>
                                                                        <option
                                                                            value="Samedi" {{ $schedule->jour == 'Samedi' ? 'selected' : '' }}>
                                                                            Samedi
                                                                        </option>
                                                                        <option
                                                                            value="Dimanche" {{ $schedule->jour == 'Dimanche' ? 'selected' : '' }}>
                                                                            Dimanche
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Debut <span
                                                                            class="text-danger">*</span></label>
                                                                    <input class="form-control" type="time"
                                                                           name="start_times[]"
                                                                           value="{{ $schedule->start_time }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Fin <span
                                                                            class="text-danger">*</span></label>
                                                                    <input class="form-control" type="time"
                                                                           name="end_times[]"
                                                                           value="{{ $schedule->end_time }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button type="button" class="btn btn-secondary add-schedule-row"
                                                    data-container-id="schedule-container-{{ $classe->id }}"><i
                                                    class="fa fa-plus"></i> Ajouter une séance
                                            </button>
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
                            <h3>Supprimer</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
            // Function to add a new schedule row
            function addScheduleRow(containerId) {
                var scheduleContainer = document.getElementById(containerId);
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
            }

            // Add new schedule row for "add class" modal
            $('#add-schedule-row').click(function () {
                addScheduleRow('schedule-container');
            });

            // Add new schedule row for each "update class" modal
            $('.add-schedule-row').click(function () {
                var containerId = $(this).data('container-id');
                addScheduleRow(containerId);
            });

            // Handle delete course modal
            $('button[data-bs-target="#delete_cours"]').click(function () {
                var coursId = $(this).data('cours-id');
                $('#coursId').val(coursId);
                $('#delete-course-id').text(coursId);
            });
        });
    </script>

@endsection
