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

            <!-- Add Coach Modal -->
            <div class="modal fade" id="add_coach" tabindex="-1" aria-labelledby="addcoachLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addcoachLabel">Ajouter un coach</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('coach.create') }}">
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
                                            <label class="col-form-label">Mot de passe </label>
                                            <input class="form-control floating" type="password" name="password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Tel </label>
                                            <input class="form-control floating" type="number" name="tel">
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Salaire </label>
                                            <input class="form-control floating" type="number" name="salaire">
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


            <!-- Update Coach Modal -->
            @foreach($coaches as $coach)
                <div class="modal fade" id="edit_coach{{ $coach->id }}" tabindex="-1"
                     aria-labelledby="editedherentLabel{{ $coach->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editedherentLabel{{ $coach->id }}">Modifier un coach</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('coach.update') }}">
                                    @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <input type="hidden" name="id" value="{{ $coach->id }}">
                                            <label class="col-form-label">Nom <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="nom" value="{{ $coach->user->nom }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Prenom <span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="prenom" value="{{ $coach->user->prenom }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Email </label>
                                            <input class="form-control floating" type="email" name="email" value="{{ $coach->user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Mot de passe </label>
                                            <input class="form-control floating" type="password" name="password" value="{{ $coach->user->password }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Tel </label>
                                            <input class="form-control floating" type="number" name="tel" value="{{ $coach->user->tel }}">
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
                                                                @if($classe->id === $coach->id_classe) selected @endif >
                                                            {{ $classe->libelle }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Salaire </label>
                                            <input class="form-control floating" type="number" name="salaire" value="{{ $coach->salaire }}">
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


@endsection
