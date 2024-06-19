<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Salle de sport</li>
            @auth
                @if(auth()->user()->type === 'Admin')
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#coaches" aria-expanded="false"
                           aria-controls="ui-basic">
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-title">Coaches</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="coaches">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('coach.index') }}">Liste</a></li>
                            </ul>
                        </div>
                    </li>
                @endif
            @endauth
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#adherents" aria-expanded="false"
                   aria-controls="ui-basic">
                    <i class="menu-icon fa fa-vcard-o"></i>
                    <span class="menu-title">Adherent</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="adherents">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('adherent.index') }}">Liste</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#invites" aria-expanded="false"
                   aria-controls="ui-basic">
                    <i class="menu-icon fa fa-user-circle-o"></i>
                    <span class="menu-title">Invités</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="invites">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('invite.index') }}">Liste</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#cours" aria-expanded="false"
                   aria-controls="ui-basic">
                    <i class="menu-icon fa fa-cubes"></i>
                    <span class="menu-title">Cours</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="cours">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cours.index') }}">Liste</a></li>
                    </ul>
                </div>
            </li>
            @auth
                @if(auth()->user()->type === 'Admin')
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#abonnement" aria-expanded="false"
                           aria-controls="ui-basic">
                            <i class="menu-icon fa fa-folder-open-o"></i>
                            <span class="menu-title">Abonnement</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="abonnement">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('abonnement.index') }}">Liste</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#contact" aria-expanded="false"
                           aria-controls="ui-basic">
                            <i class="menu-icon fa fa-envelope-o"></i>
                            <span class="menu-title">Contact</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="contact">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact.index') }}">Liste</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#activite" aria-expanded="false"
                           aria-controls="ui-basic">
                            <i class="menu-icon fa fa-paper-plane-o"></i>
                            <span class="menu-title">Activite</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="activite">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('activite.index') }}">Liste</a></li>
                            </ul>
                        </div>
                    </li>
                @endif
            @endauth
        </ul>
    </nav>
    <!-- partial -->
