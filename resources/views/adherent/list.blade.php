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
                            @auth
                                @if(auth()->user()->type === 'Admin')
                                    <div class="text-end mb-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#add_adherent">
                                            <i class="fa fa-plus"></i> Ajouter un adherent
                                        </button>
                                    </div>
                                @endif
                            @endauth
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
                                    @auth
                                        @if(auth()->user()->type === 'Admin')
                                            @foreach($adherents as $index => $adherent)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td> {{ $adherent->nom }} {{ $adherent->prenom }}</td>
                                                    <td> {{ $adherent->date_inscription }}</td>
                                                    <td> {{ $adherent->classe->libelle }}</td>
                                                    <td>
                                                        @if($adherent->statut == 'Actif')
                                                            <label
                                                                class="badge badge-success">{{ $adherent->statut }}</label>
                                                        @elseif($adherent->statut == 'Non-actif')
                                                            <label
                                                                class="badge badge-danger">{{ $adherent->statut }}</label>
                                                        @endif
                                                    </td>
                                                    <td class="text-right">
                                                        <a class="btn btn-outline-info"
                                                           href="{{ route('adherent.profile', ['id' => $adherent->id]) }}"><i
                                                                class="fa fa-eye"></i>
                                                        </a>
                                                        <a class="btn btn-outline-primary update-status-btn" href="#"
                                                           data-adherent-id="{{ $adherent->id }}">
                                                            <i class="fa fa-rotate-right"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-warning"
                                                                data-bs-toggle="modal" data-id="{{ $adherent->id }}"
                                                                data-bs-target="#edit_adherent{{ $adherent->id }}">
                                                            <i class="fa fa-pencil"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-outline-danger"
                                                                data-bs-toggle="modal"
                                                                data-adherent-id="{{ $adherent->id }}"
                                                                data-bs-target="#delete_adherent">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @elseif(auth()->user()->type === 'Coach')
                                            @foreach($adherentsCoach as $index => $adherentCoach)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td> {{ $adherentCoach->nom }} {{ $adherentCoach->prenom }}</td>
                                                    <td> {{ $adherentCoach->date_inscription }}</td>
                                                    <td> {{ $adherentCoach->classe->libelle }}</td>
                                                    <td>
                                                        @if($adherentCoach->statut == 'Actif')
                                                            <label
                                                                class="badge badge-success">{{ $adherentCoach->statut }}</label>
                                                        @elseif($adherentCoach->statut == 'Non-actif')
                                                            <label
                                                                class="badge badge-danger">{{ $adherentCoach->statut }}</label>
                                                        @endif
                                                    </td>
                                                    <td class="text-right">
                                                        <a class="btn btn-outline-info" href="#"><i
                                                                class="fa fa-eye"></i>
                                                        </a>
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
                    <!-- Add Adherent Modal -->
                    <div class="modal fade" id="add_adherent" tabindex="-1" aria-labelledby="addadherentLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addadherentLabel">Ajouter un adherent</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ route('adherent.create') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-form-label">Nom <span class="text-danger">*</span></label>
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
                                            <div class="col-sm-6">
                                                <div class="form-group form-focus select-focus">
                                                    <label class="col-form-label">Sexe <span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-control" name="gender">
                                                        <option>Choisir</option>
                                                        <option>F</option>
                                                        <option>M</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-form-label">Date de naissance <span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control" type="date" name="date_naissance">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-form-label">Ville <span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="ville">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-form-label">Adresse <span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="adresse">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
                                                <div class="form-group form-focus select-focus">
                                                    <label class="col-form-label">Cours <span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-control" name="id_classe">
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

                    <!-- Update Adherent Modal -->
                    @foreach($adherents as $adherent)
                        <div class="modal fade" id="edit_adherent{{ $adherent->id }}" tabindex="-1"
                             aria-labelledby="editedherentLabel{{ $adherent->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editedherentLabel{{ $adherent->id }}">Modifier un
                                            adherent</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ route('adherent.update') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="{{ $adherent->id }}">
                                                        <label class="col-form-label">Nom <span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" name="nom"
                                                               value="{{ $adherent->nom }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Prenom <span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" name="prenom"
                                                               value="{{ $adherent->prenom }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group form-focus select-focus">
                                                        <label class="col-form-label">Sexe <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control" name="gender"
                                                                value="{{ $adherent->gender }}">
                                                            <option
                                                                value="F" {{ $adherent->gender === 'F' ? 'selected' : '' }}>
                                                                F
                                                            </option>
                                                            <option
                                                                value="M" {{ $adherent->gender === 'M' ? 'selected' : '' }}>
                                                                M
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Date de naissance</label>
                                                        <input class="form-control" type="date" name="date_naissance"
                                                               value="{{ $adherent->date_naissance }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Ville <span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" name="ville"
                                                               value="{{ $adherent->ville }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Adresse <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" name="adresse"
                                                               value="{{ $adherent->adresse }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Email </label>
                                                        <input class="form-control floating" type="email" name="email"
                                                               value="{{ $adherent->email }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Tel </label>
                                                        <input class="form-control floating" type="number" name="tel"
                                                               value="{{ $adherent->tel }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-form-label">Date inscription</label>
                                                        <input class="form-control" type="date" name="date_inscription"
                                                               value="{{ $adherent->date_inscription }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-focus select-focus">
                                                        <label class="col-form-label">Cours <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control" name="id_classe">
                                                            <option>Choisir</option>
                                                            @foreach($classes as $classe)
                                                                <option value="{{ $classe->id }}"
                                                                        @if($classe->id === $adherent->id_classe) selected @endif >
                                                                    {{ $classe->libelle }}
                                                                </option>
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
                    @endforeach

                    <!-- Delete Adherent Modal -->
                    <div class="modal fade" id="delete_adherent" tabindex="-1" aria-labelledby="deleteadherentLabel"
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
                                        <p>Êtes-vous sûr de vouloir supprimer l'adherent ?</p>
                                    </div>
                                    <div class="modal-btn delete-action">
                                        <form method="POST" action="{{ route('adherent.delete') }}" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="hidden" name="adherentId" id="adherentId" value="">
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

                @endif
            @endauth
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $('button[data-bs-target="#delete_adherent"]').click(function () {
                var adherentId = $(this).data('adherent-id');
                $('#adherentId').val(adherentId);
                $('#delete-adherent-id').text(adherentId);
            });
        });

        $(document).ready(function () {
            $('.update-status-btn').click(function (e) {
                e.preventDefault();
                var adherentId = $(this).data('adherent-id');
                var button = $(this);

                $.ajax({
                    url: '{{ route("adherent.updateStatus", ":id") }}'.replace(':id', adherentId),
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        if (response.new_status === 'Actif') {
                            button.closest('tr').find('.status-badge').removeClass('badge-danger').addClass('badge-success').text('Actif');
                        } else {
                            button.closest('tr').find('.status-badge').removeClass('badge-success').addClass('badge-danger').text('Non-actif');
                        }
                        location.reload();
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

@endsection
