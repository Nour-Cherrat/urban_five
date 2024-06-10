@extends('layoutsAdmin.app')

@section('title')
    <title>Contact form</title>
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Lise des entrées</h4>
                            <p class="card-description">test <code> test</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th> Nom</th>
                                        <th> Objet</th>
                                        <th> Date</th>
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $index => $contact)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td> {{ $contact->nom }} </td>
                                            <td> {{ $contact->objet }} </td>
                                            <td> {{ optional($contact->created_at)->format('Y-m-d - H:i:s') ?? '- -' }}
                                            </td>
                                            <td class="text-right">
                                                <a class="btn btn-outline-info"
                                                   href="{{ route('contact.details', ['id' => $contact->id]) }}"><i
                                                        class="fa fa-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger"
                                                        data-bs-toggle="modal"
                                                        data-contact-id="{{ $contact->id }}"
                                                        data-bs-target="#delete_contact">
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

            <!-- Delete Contact Modal -->
            <div class="modal fade" id="delete_contact" tabindex="-1" aria-labelledby="deletecontactLabel"
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
                                <p>Êtes-vous sûr de vouloir supprimer l'entrée ?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <form method="POST" action="{{ route('contact.delete') }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="hidden" name="contactId" id="contactId" value="">
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
            $('button[data-bs-target="#delete_contact"]').click(function () {
                var contactId = $(this).data('contact-id');
                $('#contactId').val(contactId);
                $('#delete-contact-id').text(contactId);
            });
        });
    </script>

@endsection
