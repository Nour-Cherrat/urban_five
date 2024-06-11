@extends('layoutsAdmin.app')

@section('title')
    <title>S'inscrire</title>
@endsection

@section('content')

    <body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-8 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                            </div>
                            <h4>Vous êtes nouveau ?</h4>

                            <form id="registrationForm" method="post" action="{{ route('register') }}">
                                @csrf

                                <!-- Step 1: User Information -->
                                <div id="step1">
                                    <div class="row">
                                        <p style="color: #f64b4b">Informations générales</p>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Nom <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="nom">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Prenom <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="prenom">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                <input class="form-control floating" type="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Mot de passe <span class="text-danger">*</span></label>
                                                <input class="form-control floating" type="password" name="password">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Tel <span class="text-danger">*</span></label>
                                                <input class="form-control floating" type="number" name="tel">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
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
                                        <div class="col-md-4">
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
                                        <button type="button" class="btn btn-secondary" onclick="nextStep()">Suivant
                                        </button>
                                    </div>
                                </div>

                                <!-- Step 2: Payment Information -->
                                <div id="step2" style="display:none;">
                                    <div class="row">
                                        <p style="color: #f64b4b">Paiement</p>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Card Number <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="card_number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Expiration Date <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="expiration_date"
                                                       placeholder="MM/YY">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">CVC <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="cvc">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button type="button" class="btn btn-secondary" onclick="previousStep()">
                                            Précédent
                                        </button>
                                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script>
        function nextStep() {
            document.getElementById('step1').style.display = 'none';
            document.getElementById('step2').style.display = 'block';
        }

        function previousStep() {
            document.getElementById('step2').style.display = 'none';
            document.getElementById('step1').style.display = 'block';
        }
    </script>

@endsection
