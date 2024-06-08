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

            <!-- Add Invite Modal -->
            <div class="modal fade" id="add_invite" tabindex="-1" aria-labelledby="addinviteLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addinviteLabel">Ajouter un invite</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('invite.create') }}">
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
                                            <label class="col-form-label">Date</label>
                                            <input class="form-control" type="date" name="date">
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

            <!-- Update Invite Modal -->
            @foreach($invites as $invite)
                <div class="modal fade" id="edit_invite{{ $invite->id }}" tabindex="-1"
                     aria-labelledby="editeinviteLabel{{ $invite->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editeinviteLabel{{ $invite->id }}">Modifier un invite</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('invite.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{ $invite->id }}">
                                                <label class="col-form-label">Nom <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="nom" value="{{ $invite->nom }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Prenom <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="prenom" value="{{ $invite->prenom }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Email </label>
                                                <input class="form-control floating" type="email" name="email" value="{{ $invite->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Tel </label>
                                                <input class="form-control floating" type="number" name="tel" value="{{ $invite->tel }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Date inscription</label>
                                                <input class="form-control" type="date" name="date" value="{{ $invite->date }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-focus select-focus">
                                                <label class="col-form-label">Sexe <span
                                                        class="text-danger">*</span></label>
                                                <select class="select floating" name="gender" value="{{ $invite->gender }}">
                                                    <option
                                                        value="F" {{ $invite->gender === 'F' ? 'selected' : '' }}>
                                                        F
                                                    </option>
                                                    <option
                                                        value="M" {{ $invite->gender === 'M' ? 'selected' : '' }}>
                                                        M
                                                    </option>
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
                                                        <option value="{{ $classe->id }}"
                                                                @if($classe->id === $invite->id_classe) selected @endif >
                                                            {{ $classe->libelle }}</option>
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

            <!-- Delete Invite Modal -->
            <div class="modal fade" id="delete_invite" tabindex="-1" aria-labelledby="deleteinviteLabel"
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
                                <p>Êtes-vous sûr de vouloir supprimer l'invite ?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <form method="POST" action="{{ route('invite.delete') }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="hidden" name="inviteId" id="inviteId" value="">
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
            $('button[data-bs-target="#delete_invite"]').click(function () {
                var inviteId = $(this).data('invite-id');
                $('#inviteId').val(inviteId);
                $('#delete-invite-id').text(inviteId);
            });
        });
    </script>

@endsection
