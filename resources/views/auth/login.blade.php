@extends('layoutsAdmin.app')

@section('title')
    <title>Se connecter</title>
@endsection

@section('content')

    <body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                            </div>
                            <h4>Bonjour !</h4>
                            <h6 class="fw-light">Se connecter pour continuer.</h6>
                            <form class="pt-3" method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                           placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                           id="exampleInputPassword1" placeholder="Password" name="password">
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <button class="btn btn-primary account-btn" type="submit">Se connecter</button>
                                </div>
                                <!--
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                -->
                                <div class="text-center mt-4 fw-light"> Vous n'avez pas de compte ?
                                    <a href="{{ route('register') }}" class="text-primary">S'inscrire</a>
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

@endsection
