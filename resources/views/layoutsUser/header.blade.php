<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('site') }}" class="logo">complexe<em> Urbain5</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ route('site') }}" class="active">Accueil</a></li>
                        <li class="scroll-to-section"><a href="#features">À Propos</a></li>
                        <li class="scroll-to-section"><a href="#our-classes">Cours</a></li>
                        <li class="scroll-to-section"><a href="#schedule">Planning</a></li>
                        <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>
                        @if (Auth::check())
                            <li class="main-button"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        @else
                            <!-- If user is not authenticated -->
                            <li class="main-button"><a href="{{ route('login') }}">Se connecter</a></li>
                        @endif
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
