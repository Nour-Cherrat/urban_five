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
                                            <td> {{ optional($contact->created_at)->format('Y-m-d - H:i:s') }}
                                            </td>
                                            <td class="text-right">
                                                <a class="btn btn-outline-info"
                                                   href="#"><i
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


        </div>
    </div>


@endsection
