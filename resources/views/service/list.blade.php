@extends('layoutsAdmin.app')

@section('title')
    <title>Service</title>
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Lise des services</h4>
                            <div class="text-end mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#add_service">
                                    <i class="fa fa-plus"></i> Ajouter un service
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th> Libelle</th>
                                        <th> Description</th>
                                        <th> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $index => $service)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td> {{ $service->libelle }} </td>
                                            <td> {{ $service->description }}</td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-outline-warning"
                                                        data-bs-toggle="modal" data-id="{{ $service->id }}"
                                                        data-bs-target="#edit_service{{ $service->id }}">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-danger"
                                                        data-bs-toggle="modal"
                                                        data-service-id="{{ $service->id }}"
                                                        data-bs-target="#delete_service">
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
            $('button[data-bs-target="#delete_service"]').click(function () {
                var serviceId = $(this).data('service-id');
                $('#serviceId').val(serviceId);
                $('#delete-service-id').text(serviceId);
            });
        });

    </script>

@endsection
