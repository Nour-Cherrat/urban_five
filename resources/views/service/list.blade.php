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


            <!-- Add service Modal -->
            <div class="modal fade" id="add_service" tabindex="-1" aria-labelledby="addserviceLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addserviceLabel">Ajouter un service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('service.create') }}">
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
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Update service Modal -->
            @foreach($services as $service)
                <div class="modal fade" id="edit_service{{ $service->id }}" tabindex="-1"
                     aria-labelledby="editserviceLabel{{ $service->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editserviceLabel{{ $service->id }}">Modifier un
                                    service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('service.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{ $service->id }}">
                                                <label class="col-form-label">Libelle <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="libelle"
                                                       value="{{ $service->libelle }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Description <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="description"
                                                       value="{{ $service->description }}">
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


            <!-- Delete service Modal -->
            <div class="modal fade" id="delete_service" tabindex="-1" aria-labelledby="deleteserviceLabel"
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
                                <p>Êtes-vous sûr de vouloir supprimer le service ?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <form method="POST" action="{{ route('service.delete') }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="hidden" name="serviceId" id="serviceId" value="">
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
            $('button[data-bs-target="#delete_service"]').click(function () {
                var serviceId = $(this).data('service-id');
                $('#serviceId').val(serviceId);
                $('#delete-service-id').text(serviceId);
            });
        });

    </script>

@endsection
